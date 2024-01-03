<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $customer;
    public function __construct(CustomerRepository $customer)
    {
        $this->customer = $customer;
    }
    public function index()
    {
        return view('website.auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'mobile' => 'nullable',
            'password' => 'required|min:6'
        ]);
        try {
            DB::beginTransaction();
            $data = $request->except('password', '_token');
            $data['password'] = Hash::make($request->password);
            $data['status'] = 1;
            Customer::create($data);
            DB::commit();
            return redirect()->back()->with('flash_success', 'The account has been created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect()->back()->with('flash_error', 'Oops! something went wrong.');
        }
    }
}
