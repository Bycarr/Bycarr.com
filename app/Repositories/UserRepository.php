<?php

namespace App\Repositories;

use App\Helpers\ConstantHelper;
use App\Models\User;

class UserRepository extends Repository
{
    protected $model,$agent;

    public function __construct(User $model,AgentRepository $agent)
    {
        $this->model = $model;
        $this->agent = $agent;
    }

    public function dataProvider($request, $paginate = true)
    {
        $limit = ConstantHelper::DEFAULT_PAGE_LIMIT;

        $dataProvider = $this->model->where('is_visible',1);
        if (auth()->user()->agent_id) {
            $dataProvider = $dataProvider->where('agent_id', auth()->user()->agent_id);
        }
        if ($request->trash == true) {
            $dataProvider = $dataProvider->onlyTrashed();
        }
        if ($request->has('agent') && $request->agent != '') {
            $agent = $this->agent->findByUuid($request->agent);
            $dataProvider = $dataProvider->where('agent_id', $agent->id);
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
