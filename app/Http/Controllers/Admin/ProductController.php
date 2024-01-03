<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Imports\ProductImport;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Repositories\AgentRepository;
use App\Repositories\CityRepository;
use App\Repositories\ProductBrandRepository;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\ProductModelRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    protected $category, $brand, $product, $model, $agent, $city;

    public function __construct(
        ProductCategoryRepository $category,
        ProductRepository $product,
        ProductModelRepository $model,
        AgentRepository $agent,
        ProductBrandRepository $brand,
        CityRepository $city
    ) {
        $this->middleware(['permission:product-list|product-add|product-edit|product-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:product-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:product-change-status'], ['only' => ['changeStatus']]);
        $this->middleware(['permission:product-search'], ['only' => ['productSearch']]);
        $this->middleware(['permission:product-verify'], ['only' => ['productConfirm']]);

        $this->category = $category;
        $this->product = $product;
        $this->brand = $brand;
        $this->model = $model;
        $this->agent = $agent;
        $this->city = $city;
    }


    public function index(Request $request)
    {
        $dataProvider = $this->product->dataProvider($request);
        $categories = $this->category->dataProvider($request, false);
        $models = $this->model->dataProvider($request, false);
        $brands = $this->brand->dataProvider($request, false);
        return view('admin.product.index', [
            'dataProvider' => $dataProvider,
            'categories' => $categories, 'models' => $models,
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->status = ConstantHelper::STATUS_ACTIVE;
        $categories = $this->category->dataProvider($request, false);
        $brands = $this->brand->dataProvider($request, false);
        $cities = $this->city->dataProvider($request, false);
        return view('admin.product.create', compact('categories', 'brands', 'cities'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' =>  'nullable',
            'image' => 'required|image|max:2048|mimes:jpeg,jpg,bmp,png,svg',
            'product_category_id' => 'required|exists:product_categories,id',
            'product_brand_id' => 'required|exists:product_brands,id',
            'product_model_id' => 'required|exists:product_models,id',
            'price' => 'required|numeric',
            'images.*' => 'image|max:2048|mimes:jpeg,jpg,bmp,png.svg',
            'city_id' => 'required|exists:cities,id'
        ]);

        try {
            DB::beginTransaction();
            $data = $request->except('image', 'attributes', 'images');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;
            $data['agent_id'] = auth()->user()->agent_id;
            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'product');
                $data['image'] = $filelocation['storage'];
            }
            $data = array_filter($data);
            $product = $this->product->create($data);
            if (isset($request->attributes)) {
                foreach ($request->input('attributes') as $key => $value) {
                    if ($value != null) {
                        $attribute = [
                            'product_id' => $product->id,
                            'key' => $key,
                            'value' => $value
                        ];
                        ProductAttribute::create($attribute);
                    }
                }
            }

            if (isset($request->images)) {
                foreach ($request->images as $image) {
                    $filelocation = MediaHelper::upload($image, 'product');
                    $filename = $filelocation['storage'];
                    $image_data[] = [
                        'file' => $filename,
                        'imageable_id' => $product->id,
                        'imageable_type' => get_class($product),
                    ];
                }
                $product->images()->insert($image_data);
            }

            DB::commit();
            return redirect()->route('admin.product.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function edit(Request $request, $id)
    {
        $model = $this->product->findByUuid($id);
        $request->status = ConstantHelper::STATUS_ACTIVE;
        $categories = $this->category->dataProvider($request, false);
        $brands = $this->brand->dataProvider($request, false);
        $cities = $this->city->dataProvider($request, false);
        return view('admin.product.edit', ['model' => $model, 'categories' => $categories, 'brands' => $brands, 'cities' => $cities]);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' =>  'nullable',
            'image' => 'nullable|image|max:2048|mimes:jpeg,jpg,bmp,png,svg',
            'product_category_id' => 'required|exists:product_categories,id',
            'product_brand_id' => 'required|exists:product_brands,id',
            'product_model_id' => 'required|exists:product_models,id',
            'price' => 'required|numeric',
            'images.*' => 'image|max:2048|mimes:jpeg,jpg,bmp,png,svg',
            'city_id' => 'required|exists:cities,id'
        ]);
        try {
            $model = $this->product->findByUuid($id);

            DB::beginTransaction();
            $data = $request->except('image', 'attributes', 'images');
            $data['agent_id'] = auth()->user()->agent_id;
            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'product');
                $data['image'] = $filelocation['storage'];
            }
            $data = array_filter($data);
            $this->product->update($id, $data);
            if (isset($request->attributes)) {
                ProductAttribute::where('product_id', $model->id)->delete();
                foreach ($request->input('attributes') as $key => $value) {
                    if ($value != null) {
                        $attribute = [
                            'product_id' => $model->id,
                            'key' => $key,
                            'value' => $value
                        ];
                        ProductAttribute::create($attribute);
                    }
                }
            }

            if (isset($request->images)) {
                foreach ($request->images as $image) {
                    $filelocation = MediaHelper::upload($image, 'product');
                    $filename = $filelocation['storage'];
                    $image_data[] = [
                        'file' => $filename,
                        'imageable_id' => $model->id,
                        'imageable_type' => get_class($model),
                    ];
                }
                $model->images()->insert($image_data);
            }
            DB::commit();
            return redirect()->route('admin.product.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function changeStatus(Request $request, $id)
    {

        if ($request->ajax()) {
            $model = $this->product->findByUuid($id);
            $model->status = $model->status == ConstantHelper::STATUS_ACTIVE ? ConstantHelper::STATUS_INACTIVE : ConstantHelper::STATUS_ACTIVE;
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The status has been updated successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function verify(Request $request, $id)
    {

        if ($request->ajax()) {
            $model = $this->product->findByUuid($id);
            $model->is_verified = 1;
            $model->verified_by = auth()->id();
            $model->verified_date = now();
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The product has been verified successfully.', 'data' => $model->is_verified], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function destroyImage(Request $request, $id)
    {
        $model = $this->product->find($id);
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
            $model = $this->product->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function forceDelete(Request $request, $id)
    {

        if ($request->ajax()) {
            $model = $this->product->findByUuid($id);
            if ($model->forceDelete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function trash(Request $request)
    {
        $request->trash = true;
        $dataProvider = $this->product->dataProvider($request);
        return view('admin.product.trash', ['dataProvider' => $dataProvider]);
    }


    public function restore(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->product->findByUuid($id);
            if ($model->restore()) {
                return response()->json(['status' => 0, 'message' => 'The data has been restored successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! data cannot be restored.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function productSearch(Request $request)
    {
        if ($request->search) {
            $product = $this->product;

            if (auth()->user()->company_id && (auth()->user()->hasRole('Distributor Admin'))) {
                $product = $product->where('company_id', auth()->user()->company_id);
            }
            if (auth()->user()->company_id && (auth()->user()->hasRole('Distributor User'))) {
                $product = $product->where('company_id', auth()->user()->company_id)->where('created_by', auth()->id());
            }
            $product = $product->where('imei_no_1', $request->search)->orWhere('imei_no_2', $request->search)->orWhere('serial_no', $request->search)->first();
            $dealers = $this->dealer->dataProvider($request, false);
            return view('admin.product.search', compact('product', 'dealers'));
        }
        return view('admin.product.search');
    }
    public function productConfirm(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = ['is_verified' => true, 'verified_by' => auth()->id(), 'verified_date' => now()];
            $this->product->update($request->product_id, $data);
            DB::commit();
            return redirect()->back()->with('flash_success', 'The record has been confirmed successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be confirmed.');
        }
    }
    public function getModel($brand)
    {
        $models = DB::table('product_models')->where('product_brand_id', $brand)->orderBy('title', 'asc')->get();
        return response()->json([
            'success' => true,
            'models' => $models,
        ], 200);
    }
    public function getAttribute(Request $request, $category)
    {
        $product = null;
        if ($request->has('uuid')) {
            $product = $this->product->findByUuid($request->uuid);
        }
        $category = $this->category->find($category);
        $attributes = $category->attributes;
        $html = view('admin.product._attribute', compact('attributes', 'product'))->render();
        return response()->json(['html' => $html], 200);
    }
    public function getImportProduct(Request $request)
    {
        $request->status = ConstantHelper::STATUS_ACTIVE;
        $categories = $this->category->dataProvider($request, false);
        return view('admin.product.import', compact('categories'));
    }
    public function postImport(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|max:2048|mimes:xls,xlsx',
            'product_category_id' => 'required|exists:product_categories,id',
            'product_model_id' => 'required|exists:product_models,id'
        ]);
        try {
            $rows = Excel::toArray(new ProductImport($request->all()), $request->file);
            $removed = array_shift($rows[0]);
            // dd(empty($rows[0]));
            $collection = [];
            if (empty($rows[0])) {
                return redirect()->back()->with('flash_error', 'No records found in file')
                    ->withInput();
            }
            // foreach ($rows[0] as $row) {

            //     $collection[] = [
            //         'title' => $row[1],
            //         'imei_no_1' => is_numeric($row[2]) ? number_format($row[2], 0, '.', '') : $row[2],
            //         'imei_no_2' =>  is_numeric($row[3]) ? number_format($row[3], 0, '.', '') : $row[3],
            //         'serial_no' => is_numeric($row[4]) ? number_format($row[4], 0, '.', '') : $row[4],
            //         'regional_distributor' => $row[5],
            //         'retail_store' => $row[6],
            //     ];
            // }
            foreach ($rows[0] as $key => $row) {

                $collection[$key + 1] = [
                    // 'title' => $row[1],
                    'imei_no_1' => $row[0],
                    'imei_no_2' => $row[1],
                    'serial_no' => $row[2],
                    // 'regional_distributor' => strtoupper($row[5]),
                    // 'retail_store' => strtoupper($row[6]),
                ];
            }

            // dd($collection,$rows[0]);
            // $validator = Validator::make($collection, [
            //     '*.title' => 'required',

            //     '*.imei number 1' => [
            //         new ImeiUniqueRule,
            //     ],
            //     '*.imei number 2' => [
            //         new ImeiUniqueRule,
            //     ],
            //     '*.serial number' => 'required|unique:products,serial_no',
            //     '*.regional distributor' => 'required',
            //     '*.retail store' => 'required',
            // ]);

            // if ($validator->fails()) {
            //     return back()
            //         ->withErrors($validator)
            //         ->withInput();
            // }
            DB::beginTransaction();

            foreach ($collection as $item) {
                $validator = Validator::make($item, [
                    'title' => 'nullable',

                    'imei_no_1' => [
                        new ImeiUniqueRule,
                        'size:15'

                    ],
                    'imei_no_2' => [
                        new ImeiUniqueRule,
                        'size:15'
                    ],
                    'serial_no' => 'required|unique:products,serial_no',
                    'regional_distributor' => 'nullable',
                    'retail_store' => 'nullable',
                ], [
                    'serial_no.unique' => 'The serial no has duplicate or already taken'
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator)
                        ->withInput();
                }
                $item['product_category_id'] = $request->product_category_id;
                $item['product_model_id'] = $request->product_model_id;
                $item['company_id'] = auth()->user()->company_id;
                if (isset($item['imei_no_1']) || isset($item['imei_no_2'])) {
                    $item['is_imei'] = 1;
                }
                Product::create($item);
            }
            DB::commit();
            return redirect()->route('admin.product.index')->with('flash_success', 'The record has been imported successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return redirect()->back()->with('flash_error', $th->getMessage());
        }
    }
}
