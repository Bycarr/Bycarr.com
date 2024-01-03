<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Http\Controllers\Controller;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    protected $customer;
    public function __construct(CustomerRepository $customer)
    {
        $this->middleware(['permission:customer-view|customer-add|customer-edit|customer-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:customer-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:customer-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:customer-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:customer-change-status'], ['only' => ['changeStatus']]);
        $this->customer = $customer;
    }

    public function index(Request $request)
    {
        $dataProvider = $this->customer->dataProvider($request);
        return view('admin.customer.index', ['dataProvider' => $dataProvider]);
    }
    public function changeStatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->customer->find($id);
            $model->status = $model->status == ConstantHelper::STATUS_ACTIVE ? ConstantHelper::STATUS_INACTIVE : ConstantHelper::STATUS_ACTIVE;
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The status has been updated successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
}
