<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategoryRequest;
use Illuminate\Http\Request;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    protected $category;
    public function __construct(ProductCategoryRepository $category)
    {
        $this->middleware(['permission:product-category-list|product-category-add|product-category-edit|product-category-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:product-category-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:product-category-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:product-category-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:product-category-change-status'], ['only' => ['changeStatus']]);
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dataProvider = $this->category->dataProvider($request);
        return view('admin.product-category.index', ['dataProvider' => $dataProvider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('_token', 'uuid');
            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'category');
                $data['image'] = $filelocation['storage'];
            }
            if (isset($request->uuid)) {
                $this->category->update($request->uuid, $data);
            } else {
                $data['status'] = ConstantHelper::STATUS_ACTIVE;

                $this->category->create($data);
            }

            DB::commit();
            return redirect()->route('admin.product-category.index')->with('flash_success', 'The record has been added successfully.');
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
        $model = $this->category->findByUuid($id);

        return view('admin.product-category.edit', ['model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryRequest $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        if ($request->ajax()) {
            $model = $this->category->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function changeStatus(Request $request, $id)
    {

        if ($request->ajax()) {
            $model = $this->category->findByUuid($id);
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
        $request->trash = true;

        $dataProvider = $this->category->dataProvider($request);

        return view('admin.product-category.trash', ['dataProvider' => $dataProvider]);
    }

    public function restore(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->category->findByUuid($id);
            if ($model->restore()) {
                return response()->json(['status' => 0, 'message' => 'The data has been restored successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! data cannot be restored.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
}
