<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if ($guard == 'customer') {
                if (Auth::guard($guard)->check()) {
                    // dd('customer');
                    return redirect(RouteServiceProvider::CUSTOMER);
                }
            } else {
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::HOME);
                }
            }
        }
        // $user_type = request()->segment(1);

        // switch ($user_type) {
        //     case 'system-user':
        //         if (Auth::guard('admin')->check()) {
        //             return redirect(RouteServiceProvider::HOME);
        //         }
        //         break;
        //     case 'customer':
        //         if (Auth::guard('customer')->check()) {
        //             return redirect(RouteServiceProvider::CUSTOMER);
        //         }
        //         break;
        //     default:
        //         return redirect('/');
        // }

        return $next($request);
    }
}
