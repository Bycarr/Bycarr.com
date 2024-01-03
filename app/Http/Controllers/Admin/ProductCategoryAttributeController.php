<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryAttributeRequest;
use App\Repositories\AttributeRepository;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryAttributeController extends Controller
{
    protected $category, $attribute;
    public function __construct(ProductCategoryRepository $category, AttributeRepository $attribute)
    {
        $this->middleware(['permission:product-category-list|product-category-add|product-category-edit|product-category-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:product-category-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:product-category-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:product-category-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:product-category-change-status'], ['only' => ['changeStatus']]);
        $this->category = $category;
        $this->attribute = $attribute;
    }

    public function index(Request $request, $category)
    {
        $request->status = 1;
        $category = $this->category->findByUuid($category);
        $attributes = $this->attribute->dataProvider($request, false);
        $categoryAttributes = $category->attributes()->pluck('attribute_id')->toArray();
        return view('admin.product-category.attribute.index', ['category' => $category, 'attributes' => $attributes, 'categoryAttributes' => $categoryAttributes]);
    }
    public function store(ProductCategoryAttributeRequest $request, $category)
    {
        try {
            DB::beginTransaction();
            $category = $this->category->findByUuid($category);
            $category->attributes()->sync($request->attribute);
            DB::commit();
            return redirect()->back()->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
}
