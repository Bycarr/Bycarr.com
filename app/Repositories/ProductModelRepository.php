<?php

namespace App\Repositories;

use App\Helpers\ConstantHelper;
use App\Models\ProductModel;

class ProductModelRepository extends Repository
{
    protected $model;

    public function __construct(ProductModel $model)
    {
        $this->model = $model;
    }

    public function dataProvider($request,$brand = null, $paginate = true)
    {
        $limit = ConstantHelper::DEFAULT_PAGE_LIMIT;

        $dataProvider = $this->model;
        if($brand){
            $dataProvider = $dataProvider->where('product_brand_id',$brand);
        }
        if ($request->trash == true) {
            $dataProvider = $dataProvider->onlyTrashed();
        }
        if ($request->has('title') && $request->title != '') {
            $dataProvider = $dataProvider->where('title', 'like', $request->title . '%');
        }

        if ($paginate) {
            $dataProvider = $dataProvider->paginate($limit);
        } else {
            $dataProvider = $dataProvider->get();
        }
        return $dataProvider;
    }
}
