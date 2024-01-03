<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductBrandRequest;
use Illuminate\Http\Request;
use App\Repositories\ProductBrandRepository;
use Illuminate\Support\Facades\DB;

class ProductBrandController extends Controller
{
    protected $brand;
    public function __construct(ProductBrandRepository $brand)
    {
        $this->middleware(['permission:product-brand-list|product-brand-add|product-brand-edit|product-brand-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:product-brand-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:product-brand-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:product-brand-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:product-brand-change-status'], ['only' => ['changeStatus']]);
        $this->brand = $brand;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dataProvider = $this->brand->dataProvider($request);
        return view('admin.product-brand.index', ['dataProvider' => $dataProvider]);
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
    public function store(ProductBrandRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('_token', 'uuid');
            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'brand');
                $data['image'] = $filelocation['storage'];
            }
            if (isset($request->uuid)) {
                if ($request->hasFile('image')) {
                    $brand = $this->brand->findByUuid($request->uuid);
                    if (file_exists('storage/' . $brand->image) && !empty($brand->image)) {
                        MediaHelper::destroy($brand->image);
                    }
                }
                $this->brand->update($request->uuid, $data);
            } else {
                $data['status'] = ConstantHelper::STATUS_ACTIVE;

                $this->brand->create($data);
            }

            DB::commit();
            return redirect()->route('admin.product-brand.index')->with('flash_success', 'The record has been added successfully.');
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
    public function update(ProductBrandRequest $request, $id)
    {
        abort(404);
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
            $model = $this->brand->findByUuid($id);
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
            $model = $this->brand->findByUuid($id);
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

        $dataProvider = $this->brand->dataProvider($request);

        return view('admin.product-category.trash', ['dataProvider' => $dataProvider]);
    }

    public function restore(Request $request, $id)
    {
        abort(404);

        if ($request->ajax()) {
            $model = $this->brand->findByUuid($id);
            if ($model->restore()) {
                return response()->json(['status' => 0, 'message' => 'The data has been restored successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! data cannot be restored.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
}
