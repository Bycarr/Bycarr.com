<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Repositories\AgentRepository;
use App\Repositories\BookingRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    protected $product, $booking, $customer, $agent;
    public function __construct(
        ProductRepository $product,
        BookingRepository $booking,
        CustomerRepository $customer,
        AgentRepository $agent
    ) {
        $this->product = $product;
        $this->booking = $booking;
        $this->customer = $customer;
        $this->agent = $agent;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::select(
            DB::raw('COUNT(*) as total'),
            DB::raw('SUM(is_verified = 1) as verified'),
            DB::raw('SUM(is_verified = 0) as unverified')
        )->first();
        $customer = $this->customer->count();
        $agent = $this->agent->count();
        $booking = $this->booking->where('status', '<>', ConstantHelper::BOOKING_STATUS_INITIATE)->count();

        return view('admin.dashboard.index', compact('product', 'customer', 'booking', 'agent'));
    }
}
