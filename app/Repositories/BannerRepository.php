<?php

namespace App\Repositories;

use App\Helpers\ConstantHelper;
use App\Models\Banner;

class BannerRepository extends Repository
{
    protected $model;

    public function __construct(Banner $model)
    {
        $this->model = $model;
    }

    public function dataProvider($request, $paginate = true)
    {
        $limit = ConstantHelper::DEFAULT_PAGE_LIMIT;
        $dataProvider = $this->model;
        if ($request->trash == true) {
            $dataProvider = $dataProvider->onlyTrashed();
        }
        if ($request->has('title')) {
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
