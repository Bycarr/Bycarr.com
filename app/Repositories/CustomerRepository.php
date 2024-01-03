<?php

namespace App\Repositories;

use App\Helpers\ConstantHelper;
use App\Models\Customer;

class CustomerRepository extends Repository
{
    protected $model;

    public function __construct(Customer $model)
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
        if ($paginate) {
            $dataProvider = $dataProvider->paginate($limit);
        } else {
            $dataProvider = $dataProvider->get();
        }
        return $dataProvider;
    }
}
