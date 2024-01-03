<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\BookingLog;
use App\Repositories\BookingRepository;
use App\Repositories\ProductBrandRepository;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\ProductModelRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    protected $booking, $product, $category, $brand, $model;
    public function __construct(
        BookingRepository $booking,
        ProductRepository $product,
        ProductCategoryRepository $category,
        ProductBrandRepository $brand,
        ProductModelRepository $model
    ) {
        $this->booking = $booking;
        $this->product = $product;
        $this->category = $category;
        $this->brand = $brand;
        $this->model = $model;
    }
    public function index(Request $request)
    {
        $dataProvider = $this->booking->dataProvider($request);
        $categories = $this->category->dataProvider($request, false);
        $models = $this->model->dataProvider($request, false);
        $brands = $this->brand->dataProvider($request, false);
        return view('admin.booking.index', [
            'dataProvider' => $dataProvider,
            'categories' => $categories, 'models' => $models,
            'brands' => $brands
        ]);
    }
    public function show($id)
    {
        $model = $this->booking->findByUuid($id);
        return view('admin.booking.show', [
            'model' => $model
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
            'note' => 'nullable',
        ]);
        $model = $this->booking->findByUuid($id);
        try {
            DB::beginTransaction();
            $this->booking->update($id, ['status' => $request->status]);
            $booking = $this->booking->findByUuid($id);
            $data = [
                'uuid' => Str::uuid(),
                'booking_id' => $booking?->uuid,
                'payment_status' => $booking?->payment_status,
                'booking_status' => $booking?->status,
                'title' => $this->getTitle($booking->status, $model->status) ?? '',
                'note' => $request->note ?? '',
            ];
            BookingLog::create($data);
            DB::commit();
            return redirect()->back()->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    protected function getTitle($currentStatus, $modelStatus)
    {
        $to = CommonHelper::bookingStatus($currentStatus);
        $from = CommonHelper::bookingStatus($modelStatus);

        return 'Booking Status Changed from ' . $from . ' to ' . $to;
    }
}
