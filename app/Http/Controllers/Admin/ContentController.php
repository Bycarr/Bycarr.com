<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContentRequest;
use App\Repositories\ContentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    protected $content;

    public function __construct(ContentRepository $content)
    {
        $this->middleware(['permission:content-list|content-add|content-edit|content-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:content-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:content-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:content-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:content-change-status'], ['only' => ['changeStatus']]);
        $this->content = $content;
    }

    public function index(Request $request)
    {
        $dataProvider = $this->content->dataProvider($request);
        return view('admin.content.index', ['dataProvider' => $dataProvider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.create');
    }
    public function store(ContentRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('image');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;

            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'content');
                $data['image'] = $filelocation['storage'];
            }
            $this->content->create($data);
            DB::commit();
            return redirect()->route('admin.content.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function edit($id)
    {
        $model = $this->content->findByUuid($id);
        return view('admin.content.edit', ['model' => $model]);
    }

    public function update(ContentRequest $request, $id)
    {
        $model = $this->content->findByUuid($id);
        try {
            DB::beginTransaction();
            $data = $request->except('image');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;
            if ($request->hasFile('image')) {
                if (file_exists('storage/' . $model->image) && !empty($model->image)) {
                    MediaHelper::destroy($model->image);
                }
                $filelocation = MediaHelper::upload($request->file('image'), 'content');
                $data['image'] = $filelocation['storage'];
            }
            $this->content->update($id, $data);
            DB::commit();
            return redirect()->route('admin.content.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function changeStatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->content->findByUuid($id);
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
        $model = $this->content->find($id);
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
            $model = $this->content->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
}
