<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Repositories\CustomerRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    protected $redirectTo = RouteServiceProvider::CUSTOMER;

    protected $customer;
    public function __construct(CustomerRepository $customer)
    {
        $this->customer = $customer;
    }
    public function index()
    {
        echo 'Login successfully';
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:customers,email',
            'password' => 'required'
        ]);
        try {
            $credentials = $request->except(['_token', 'remember']);
            $remember = $request->has('remember') ? true : false;
            $customer = $this->customer->where('email', $request->email)->isActive()->first();
            if ($customer) {
                if (Auth::guard('customer')->attempt($credentials, $remember)) {
                    // if ($request->hasSession()) {
                    //     $request->session()->put('auth.password_confirmed_at', time());
                    // }
                    return $this->sendLoginResponse($request);
                    // return redirect()->route('customer.dashboard');
                } else {
                    return redirect()->back()->withInput()->with('flash_error', trans('auth.failed'));
                }
            } else {
                return redirect()->back()->withInput()->with('flash_error', 'Account is inactive');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withInput()->with('flash_error', trans('auth.failed'));
        }
    }
    protected function sendLoginResponse(Request $request)
    {
        // $request->session()->regenerate();

        // $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->intended($this->redirectPath());
    }
    protected function authenticated(Request $request, $user)
    {
        //
    }
    protected function clearLoginAttempts(Request $request)
    {
        $this->limiter()->clear($this->throttleKey($request));
    }
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/customer/my-account';
    }
    protected function limiter()
    {
        return app(RateLimiter::class);
    }
    protected function throttleKey(Request $request)
    {
        return Str::transliterate(Str::lower($request->input($this->username())) . '|' . $request->ip());
    }
    public function username()
    {
        return 'email';
    }
    protected function guard()
    {
        return Auth::guard('customer');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->route('customer.register')->with('flash_success', $request->message ?? 'You have been logged out!!');
    }
    protected function loggedOut(Request $request)
    {
        //
    }
}
