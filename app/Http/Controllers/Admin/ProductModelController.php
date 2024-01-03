<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductModelRequest;
use App\Repositories\ProductBrandRepository;
use Illuminate\Http\Request;
use App\Repositories\ProductModelRepository;
use Illuminate\Support\Facades\DB;

class ProductmodelController extends Controller
{
    protected $model, $brand;
    public function __construct(ProductModelRepository $model, ProductBrandRepository $brand)
    {
        $this->middleware(['permission:product-model-list|product-model-add|product-model-edit|product-model-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:product-model-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:product-model-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:product-model-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:product-model-change-status'], ['only' => ['changeStatus']]);
        $this->model = $model;
        $this->brand = $brand;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $brand = $this->brand->findByUuid($id);
        $dataProvider = $this->model->dataProvider($request, $brand->id);
        return view('admin.product-model.index', ['dataProvider' => $dataProvider, 'brand' => $brand]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductModelRequest $request, $id)
    {
        if (isset($request->uuid)) {
            $this->validate($request, [
                'title' => 'unique:product_models,title,' . $request->uuid . ',uuid'
            ]);
        } else {
            $this->validate($request, [
                'title' => 'unique:product_models,title'
            ]);
        }
        try {
            $brand = $this->brand->findByUuid($id);
            DB::beginTransaction();
            $data = $request->except('_token', 'uuid');
            if (isset($request->uuid)) {
                $this->model->update($request->uuid, $data);
            } else {
                $data['product_brand_id'] = $brand->id;
                $data['status'] = ConstantHelper::STATUS_ACTIVE;
                $this->model->create($data);
            }

            DB::commit();
            return redirect()->route('admin.product-brand.model.index', $id)->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductModelRequest $request, $id)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $category, $id)
    {

        if ($request->ajax()) {
            $model = $this->model->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function changeStatus(Request $request, $category, $id)
    {

        if ($request->ajax()) {
            $model = $this->model->findByUuid($id);
            $model->status = $model->status == ConstantHelper::STATUS_ACTIVE ? ConstantHelper::STATUS_INACTIVE : ConstantHelper::STATUS_ACTIVE;
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The status has been updated successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function trash(Request $request)
    {
        abort(404);

        $request->trash = true;

        $dataProvider = $this->model->dataProvider($request);

        return view('admin.product-model.trash', ['dataProvider' => $dataProvider]);
    }

    public function restore(Request $request, $id)
    {
        abort(404);

        if ($request->ajax()) {
            $model = $this->model->findByUuid($id);
            if ($model->restore()) {
                return response()->json(['status' => 0, 'message' => 'The data has been restored successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! data cannot be restored.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }

    public function CheckModel(Request $request)
    {
        abort(404);

        $data = $request->input('data');

        $results = DB::table('product_models')->select('title')->where('title', 'LIKE', '%' . $data . '%')->get();

        return response()->json($results);
    }
}
