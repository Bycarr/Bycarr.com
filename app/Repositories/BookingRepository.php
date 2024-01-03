<?php

namespace App\Repositories;

use App\Helpers\ConstantHelper;
use App\Models\Booking;

class BookingRepository extends Repository
{
    protected $model;

    public function __construct(Booking $model)
    {
        $this->model = $model;
    }

    public function dataProvider($request, $paginate = true)
    {
        $limit = ConstantHelper::DEFAULT_PAGE_LIMIT;
        $dataProvider = $this->model->with('product')->where('status', '<>', ConstantHelper::BOOKING_STATUS_INITIATE);
        if (auth()->user()->agent_id) {
            $dataProvider = $dataProvider->where('agent_id', auth()->user()->agent_id);
        }
        if ($request->trash == true) {
            $dataProvider = $dataProvider->onlyTrashed();
        }
        if (isset($request->category) && $request->category != '') {
            $dataProvider = $dataProvider->whereHas('product', function ($qr) use ($request) {
                $qr->where('product_category_id', $request->category);
            });
        }
        if (isset($request->brand) && $request->brand != '') {
            $dataProvider = $dataProvider->whereHas('product', function ($qr) use ($request) {
                $qr->where('product_brand_id', $request->brand);
            });
        }
        if (isset($request->model) && $request->model != '') {
            $dataProvider = $dataProvider->whereHas('product', function ($qr) use ($request) {
                $qr->where('product_model_id', $request->model);
            });
        }
        if (isset($request->booking_status) && $request->booking_status != '') {
            $dataProvider = $dataProvider->where('status', $request->booking_status);
        }
        if (isset($request->payment_status) && $request->payment_status != '') {
            $dataProvider = $dataProvider->where('payment_status', $request->payment_status);
        }
        if (isset($request->payment_method) && $request->payment_method != '') {
            $dataProvider = $dataProvider->where('payment_method', $request->payment_method);
        }
        if (isset($request->order_date) && $request->order_date !=  '') {
            if (str_contains($request->order_date, 'to')) {
                $order_date = explode(' to ', $request->order_date);
                $dataProvider = $dataProvider->whereDate('created_at', '>=', $order_date[0])
                    ->whereDate('created_at', '<=', $order_date[1]);
            } else {
                $dataProvider = $dataProvider->whereDate('created_at', $request->order_date);
            }
        }
        if ($paginate) {
            $dataProvider = $dataProvider->paginate($limit);
        } else {
            $dataProvider = $dataProvider->get();
        }
        return $dataProvider;
    }
}
