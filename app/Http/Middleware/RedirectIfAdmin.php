<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAdmin
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $admin;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $admin
     * @return void
     */
    public function __construct(Guard $admin)
    {
        $this->admin = $admin;
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
        if ($this->admin->guest() ) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('system-user/login');
            }
        }
        return $next($request);
    }
}
