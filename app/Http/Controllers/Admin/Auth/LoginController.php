<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    protected $redirectTo = '/system-user/dashboard';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }
    public function index()
    {
        return view('admin.auth.login');
    }

    /**
     * Login the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {

        $credentials = $request->except(['_token', 'remember']);
        $remember = $request->has('remember') ? true : false;
        $user = User::where('email', $request->email)->first();
        if ($user->status == 0) {
            return redirect()->back()->withInput()->with('flash_error', 'Account is inactive');
        }
        if (Auth::attempt($credentials, $remember)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }
            return $this->sendLoginResponse($request);
        } else {
            return redirect()->back()->withInput()->with('flash_error', trans('auth.failed'));
        }
    }


    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

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

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/system-user';
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
        return Auth::guard();
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
            : redirect()->route('admin.auth.login')->with('flash_success', $request->message ?? 'You have been logged out!!');
    }
    protected function loggedOut(Request $request)
    {
        //
    }
}
