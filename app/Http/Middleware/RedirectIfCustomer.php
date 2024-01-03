<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class RedirectIfCustomer
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $customer;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $customer
     * @return void
     */
    public function __construct(Guard $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (FacadesAuth::guard('customer')->check()) {
            return $next($request);
        } else {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('register');
            }
        }
    }
}
