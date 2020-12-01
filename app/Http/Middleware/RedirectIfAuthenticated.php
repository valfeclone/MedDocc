<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()){
            switch($guard) {
                case 'admins':
                    return redirect(RouteServiceProvider::DASHADMIN);
                case 'doctors':
                    return redirect(RouteServiceProvider::DASHDOCTOR);
                case 'user':
                    return redirect(RouteServiceProvider::DASHUSER);
                default:
                    return redirect(RouteServiceProvider::HOME);
            }
        }
        //redirect nya masih error
        return $next($request);
    }
}
