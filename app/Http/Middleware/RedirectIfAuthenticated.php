<?php

namespace App\Http\Middleware;

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
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard){

            case 'superadmin':
                if (Auth::guard($guard)->check()){
                    return redirect()->route('dashboard1.index');
                }
                break;

            case 'adminsekolah':
                if (Auth::guard($guard)->check()){
                    if (Auth::guard($guard)->user()->status == '2') {
                        return redirect()->intended(route('dashboard2.index'));
                    }
                }
                break;

            default:
                if (Auth::guard($guard)->check()){
                    return 'duroooooong';
                }
                break;
        }
        return $next($request);
    }
}
