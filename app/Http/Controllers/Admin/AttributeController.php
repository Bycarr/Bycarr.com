<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AttributeRequest;
use App\Repositories\AttributeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    protected $attribute;

    public function __construct(AttributeRepository $attribute)
    {
        $this->middleware(['permission:attribute-list|attribute-add|attribute-edit|attribute-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:attribute-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:attribute-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:attribute-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:attribute-change-status'], ['only' => ['changeStatus']]);
        $this->attribute = $attribute;
    }

    public function index(Request $request)
    {
        $dataProvider = $this->attribute->dataProvider($request);
        return view('admin.attribute.index', ['dataProvider' => $dataProvider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attribute.create');
    }
    public function store(AttributeRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($request->type == 'select' && !empty($request->options)) {
                $data['options'] = json_encode($request->options);
            } else {
                $options = [];
                $data['options'] = json_encode($options);
            }
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;
            $this->attribute->create($data);
            DB::commit();
            return redirect()->route('admin.attribute.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function edit($id)
    {
        $model = $this->attribute->findByUuid($id);
        return view('admin.attribute.edit', ['model' => $model]);
    }

    public function update(AttributeRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($request->type == 'select' && !empty($request->options)) {
                $data['options'] = json_encode($request->options);
            } else {
                $options = [];
                $data['options'] = json_encode($options);
            }
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;
            $this->attribute->update($id, $data);
            DB::commit();
            return redirect()->route('admin.attribute.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function changeStatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->attribute->findByUuid($id);
            $model->status = $model->status == ConstantHelper::STATUS_ACTIVE ? ConstantHelper::STATUS_INACTIVE : ConstantHelper::STATUS_ACTIVE;
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The status has been updated successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }

    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->attribute->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
}
