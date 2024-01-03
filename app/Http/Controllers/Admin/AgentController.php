<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgentRequest;
use App\Repositories\AgentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    protected $agent;

    public function __construct(AgentRepository $agent)
    {
        $this->middleware(['permission:agent-list|agent-add|agent-edit|agent-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:agent-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:agent-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:agent-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:agent-change-status'], ['only' => ['changeStatus']]);
        $this->agent = $agent;
    }

    public function index(Request $request)
    {
        $dataProvider = $this->agent->dataProvider($request);
        return view('admin.agent.index', ['dataProvider' => $dataProvider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agent.create');
    }
    public function store(AgentRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('image', 'contact');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;

            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'agent');
                $data['image'] = $filelocation['storage'];
            }
            $data['contact'] = json_encode($request->contact);
            $this->agent->create($data);
            DB::commit();
            return redirect()->route('admin.agent.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function edit($id)
    {
        $model = $this->agent->findByUuid($id);
        return view('admin.agent.edit', ['model' => $model]);
    }

    public function update(AgentRequest $request, $id)
    {
        $model = $this->agent->findByUuid($id);
        try {
            DB::beginTransaction();
            $data = $request->except('image', 'contact');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;
            if ($request->hasFile('image')) {
                if (file_exists('storage/' . $model->image) && !empty($model->image)) {
                    MediaHelper::destroy($model->image);
                }
                $filelocation = MediaHelper::upload($request->file('image'), 'agent');
                $data['image'] = $filelocation['storage'];
            }
            $data['contact'] = json_encode($request->contact);
            $this->agent->update($id, $data);
            DB::commit();
            return redirect()->route('admin.agent.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function changeStatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->agent->findByUuid($id);
            $model->status = $model->status == ConstantHelper::STATUS_ACTIVE ? ConstantHelper::STATUS_INACTIVE : ConstantHelper::STATUS_ACTIVE;
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The status has been updated successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function destroyImage(Request $request, $id)
    {
        $model = $this->agent->find($id);
        if ($model) {
            switch ($request->post('type')) {

                case 'image':
                    MediaHelper::destroy($model->image);
                    $model->image = null;
                    break;
            }
            $model->save();
            $message = 'Deleted successfully.';
            return response()->json(['status' => 'ok', 'message' => $message], 200);
        }

        return response()->json(['status' => 'error', 'message' => ''], 422);
    }
    public function destroy(Request $request, $id)
    {

        if ($request->ajax()) {
            $model = $this->agent->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
}
