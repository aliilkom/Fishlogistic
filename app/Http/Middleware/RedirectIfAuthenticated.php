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
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null){
        if (Auth::guard($guard)->check()){

            if(Auth::user()->ClassUser->ClassUser == 'Super Admin'){
               return redirect('/superadmin');
            }
            if(Auth::user()->ClassUser->ClassUser == 'Owner'){
                return redirect('/owner');
            }
            if(Auth::user()->ClassUser->ClassUser == 'Manager'){
                return redirect('/manager');
            }
            if(Auth::user()->ClassUser->ClassUser == 'Admin'){
                return redirect('/admin');
            }
       }
       return $next($request);
    }
}
