<?php

namespace App\Http\Controllers\Website\Auth;

use App\Helpers\EmailHelper;
use App\Http\Controllers\Controller;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ForgetPasswordController extends Controller
{
    protected $customer;
    public function __construct(CustomerRepository $customer)
    {
        $this->customer = $customer;
    }
    public function index()
    {
        return view('website.auth.forget-password');
    }
    public function sendPasswordResetToken(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email|exists:customers,email',
            ]
        );

        try {
            $customer = $this->customer->where('email', $request->email)->isActive()->first();
            if ($customer) {
                $token = md5(time() . rand(1000, 9999));
                $send = DB::table('password_resets')->insert([
                    'email' => $customer->email,
                    'token' => $token,
                    'created_at' => now(),
                ]);
                if ($send) {
                    $content = 'We recently received a request to reset the password for your account.
                    To ensure the security of your account, please Click on the "Reset Password" button to complete the process. <br> <br>';
                    $content .= '<div style="background:#ed264f;display: flex;
                    justify-content: center;
                    align-items: center;
                    width:50%;">
                    <a href="' . route('customer.reset.password', ['token' => $token]) . '" style="color:white; text-decoration:none;">Reset Password</a>
                  </div><br><br>';
                    $content .= 'If you did not initiate this password reset request, please ignore this email. Rest assured that your account is safe and secure.';

                    if (EmailHelper::sendEmail($customer->email, 'Password Reset', $content)) {
                        return redirect()->route('customer.register')->with('flash_success', 'The password reset email has been sent to your email.');
                    }
                } else {
                    return redirect()->back()->withInput()->with('flash_error', 'Could not sent password reset email, please try again');
                }
            } else {
                return redirect()->back()->withInput()->with('flash_error', 'Account is inactive');
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->withInput()->with('flash_error', 'Oops, something went wrong');
        }
    }
    public function getResetLink(Request $request)
    {
        if (!isset($request->token)) {
            abort(404);
        }
        return view('website.auth.reset-password');
    }
    public function resetPassword(Request $request)
    {
        if (!isset($request->token)) {
            abort(404);
        }
        $this->validate($request, [
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|confirmed',
        ]);
        try {
            $customer = $this->customer->where('email', $request->email)->isActive()->first();
            if ($customer) {
                $token = DB::table('password_resets')->where([
                    'email' => $customer->email,
                    'token' => $request->token,
                ])->first();

                if ($token) {
                    $customer->update(['password' => Hash::make($request->password)]);
                    $content = 'We are writing to inform you that your password has been successfully changed for your account.
                    This change was made in response to a recent password reset request or a security measure we have implemented.';

                    if (EmailHelper::sendEmail($customer->email, 'Password Reset', $content)) {
                        return redirect()->route('customer.register')->with('flash_success', 'The password has been reset successfully. Now you can login with new password.');
                    }
                } else {
                    return redirect()->back()->withInput()->with('flash_error', 'Could not verify token, please try again');
                }
            } else {
                return redirect()->back()->withInput()->with('flash_error', 'Account is inactive');
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->withInput()->with('flash_error', 'Oops, something went wrong');
        }
    }
}
