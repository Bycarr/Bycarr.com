<?php

namespace App\Repositories;

use App\Helpers\ConstantHelper;
use App\Models\Product;

class ProductRepository extends Repository
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function dataProvider($request, $paginate = true)
    {
        $limit = ConstantHelper::DEFAULT_PAGE_LIMIT;

        $dataProvider = $this->model;
        if (auth()->user()->agent_id) {
            $dataProvider = $dataProvider->where('agent_id', auth()->user()->agent_id);
        }
        if ($request->trash == true) {
            $dataProvider = $dataProvider->onlyTrashed();
        }
        if ($request->title != '') {
            $dataProvider = $dataProvider->where('title', 'like', $request->title . '%');
        }
       
        if ($request->category != '') {
            $dataProvider = $dataProvider->where('product_category_id', $request->category);
        }
        if ($request->brand != '') {
            $dataProvider = $dataProvider->where('product_brand_id', $request->brand);
        }
        if ($request->model != '') {
            $dataProvider = $dataProvider->where('product_model_id', $request->model);
        }
        if ($request->range != '') {
            if (str_contains($request->range, 'to')) {
                $range = explode(' to ', $request->range);
                $dataProvider = $dataProvider->whereDate('verified_date', '>=', $range[0])
                    ->whereDate('verified_date', '<=', $range[1]);
            } else {
                $dataProvider = $dataProvider->whereDate('verified_date', $request->range);
            }
        }

        if ($request->has('is_active')) {
            $dataProvider = $dataProvider->where('is_active', $request->is_active);
        }
        if ($paginate) {
            $dataProvider = $dataProvider->paginate($limit);
        } else {
            $dataProvider = $dataProvider->get();
        }
        return $dataProvider;
    }
}
