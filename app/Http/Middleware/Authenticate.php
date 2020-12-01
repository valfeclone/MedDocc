<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route as Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            $routeName = Route::current()->getName();
            if(preg_match('/admin\.*/i', $routeName)){
                return route('admin.login');
            }
            if(preg_match('/doctor\.*/i', $routeName)){
                return route('doctor.login');
            }
            if(preg_match('/user\.*/i', $routeName)){
                return route('login');
            }
        }
        else {
            return route('login');
        }
    }
}
