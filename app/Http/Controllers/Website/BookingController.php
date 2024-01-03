<?php

namespace App\Http\Controllers\Website;

use App\Helpers\ConstantHelper;
use App\Http\Controllers\Controller;
use App\Models\BookingLog;
use App\Repositories\BookingRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    protected $booking, $product;
    public function __construct(BookingRepository $booking, ProductRepository $product)
    {
        $this->booking = $booking;
        $this->product = $product;
    }
    public function index(Request $request, $slug)
    {
        $product = $this->product->where('slug', $slug)->isActive()->isVerified()->first();
        if (!$product) {
            abort(404);
        }
        return view('website.booking', compact('product'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'nullable|email',
            'mobile_no' => 'required',
            'city' => 'nullable',
            'address' => 'nullable',
            'postal_code' => 'nullable',
            'additional_info' => 'nullable',
            'payment_method' => 'required',
            'product_id' => 'required'
        ]);
        try {
            DB::beginTransaction();
            $product = $this->product->findByUuid($request->product_id);
            $data = $request->all();
            $data['customer_id'] = auth('customer')->id();
            $data['agent_id'] = $product->agent_id;
            $data['product_id'] = $product->id;
            $data['price'] = $product->price;
            $data['discount'] = $product->discount;
            $data['total_amount'] = $product->price - (($product->dicount / 100) * $product->price);
            $data['has_delivery'] = $product->delivery;
            $data['status'] = $request->payment_method == 'COD' ? ConstantHelper::BOOKING_STATUS_PENDING : ConstantHelper::BOOKING_STATUS_INITIATE;
            $booking = $this->booking->create($data);

            if ($booking->payment_method == 'COD') {
                $product->update(['stock_status' => 'Booked']);
                $data = [
                    'uuid' => Str::uuid(),
                    'booking_id' => $booking?->uuid,
                    'payment_status' => $booking?->payment_status,
                    'booking_status' => $booking?->status,
                    'title' => 'Booking Created',
                ];
                BookingLog::create($data);
            }
            DB::commit();
            return response()->json([
                'booking' => $booking,
                'product' => $product,
                'success' => true,
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            // dd($th);
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ], 502);
        }
    }
    public function esewaSuccess()
    {
        $oid = $_GET['oid'];
        $ref = $_GET['refId'];
        $amt = $_GET['amt'];
        $verifyurl = "https://uat.esewa.com.np/epay/transrec";


        $data = [
            'amt' => $amt,
            'rid' => $ref,
            'pid' => $oid,
            'scd' => 'EPAYTEST'
        ];

        $curl = curl_init($verifyurl);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        if (strpos($response, "Success") !== false) {
            try {
                DB::beginTransaction();
                $booking = $this->booking->findByUuid($oid);
                if (!$booking) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Booking not found',
                    ], 404);
                }
                $booking->update([
                    'paid_amount' => $amt,
                    'payment_status' => 2,
                    'online_trxn_id' => $ref,
                    'status' => ConstantHelper::BOOKING_STATUS_PENDING,
                ]);
                $product = $this->product->find($booking->product_id);
                $product->update([
                    'stock_status' => 'Booked'
                ]);
                $data = [
                    'uuid' => Str::uuid(),
                    'booking_id' => $booking?->uuid,
                    'payment_status' => $booking?->payment_status,
                    'booking_status' => $booking?->status,
                    'title' => 'Booking Created',
                ];
                BookingLog::create($data);
                DB::commit();
                return redirect()->route('product.show', $product->slug);
            } catch (\Throwable $th) {
                DB::rollback();
                return response()->json([
                    'success' => false,
                ], 502);
            }
        } else {
            return response()->json([ //returns failure to ajax
                'error' => 'Something went Wrong.',
            ], 404);
        }
    }
    public function esewafailure()
    {
        abort(500);
    }
    public function khaltiVerification(Request $request)
    {
        $pidx = $request->input('pidx');
        $transaction_id = $request->input('transaction_id');
        $amount = $request->input('amount');
        $mobile = $request->input('mobile');
        $purchase_order_id = $request->input('purchase_order_id');
        $purchase_order_name = $request->input('purchase_order_name');

        $message = $request->input('message');
        if ($message) {
            dd('failed');
        }

        //hit the khalit server
        $args = http_build_query(array(
            'pidx' => $pidx
        ));

        $url = "https://a.khalti.com/api/v2/epayment/lookup/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key live_secret_key_f9cf212ba7b84dbd810f08cba4e877eb'];
        // test_secret_key_f59e8b7d18b4499ca40f68195a846e9b
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $res = json_decode($response, true);
        if ($res['status'] == 'Completed') {
            try {
                DB::beginTransaction();
                $booking = $this->booking->findByUuid($purchase_order_id);
                if (!$booking) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Booking not found',
                    ], 404);
                }
                $booking->update([
                    'paid_amount' => $amount / 100,
                    'payment_status' => 2,
                    'online_trxn_id' => $transaction_id,
                    'status' => ConstantHelper::BOOKING_STATUS_PENDING,
                ]);
                $product = $this->product->find($booking->product_id);
                $product->update([
                    'stock_status' => 'Booked'
                ]);
                $data = [
                    'uuid' => Str::uuid(),
                    'booking_id' => $booking?->uuid,
                    'payment_status' => $booking?->payment_status,
                    'booking_status' => $booking?->status,
                    'title' => 'Booking Created',
                ];
                BookingLog::create($data);
                DB::commit();
                return response()->json([
                    'success' => true,
                ], 200);
            } catch (\Throwable $th) {
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => $th->getMessage(),
                ], 502);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => $res,
            ], 502);
        }
    }
    public function khaltiOldVerification(Request $request)
    {
        $oid = $request->input('oid');

        //hit the khalit server
        $args = http_build_query(array(
            'token' => $request->input('trans_token'),
            'amount'  => $request->input('amount')
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key live_secret_key_f9cf212ba7b84dbd810f08cba4e877eb'];
        // test_secret_key_f59e8b7d18b4499ca40f68195a846e9b
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $res = json_decode($response, true);
        // return response()->json($response['amount']);
        if (isset($res['idx'])) {
            try {
                DB::beginTransaction();
                $booking = $this->booking->findByUuid($oid);
                if (!$booking) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Booking not found',
                    ], 404);
                }
                $booking->update([
                    'paid_amount' => $res['amount'] / 100,
                    'payment_status' => 2,
                    'online_trxn_id' => $res['idx'],
                    'status' => ConstantHelper::BOOKING_STATUS_PENDING,
                ]);
                $product = $this->product->find($booking->product_id);
                $product->update([
                    'stock_status' => 'Booked'
                ]);

                DB::commit();
                return response()->json([
                    'success' => true,
                ], 200);
            } catch (\Throwable $th) {
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => $th->getMessage(),
                ], 502);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => $res,
            ], 502);
        }
    }
}
