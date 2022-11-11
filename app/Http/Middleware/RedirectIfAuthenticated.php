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
    // public function handle(Request $request, Closure $next, ...$guards)
    public function handle($request, Closure $next, $guard = null)
    {
        $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     return redirect(RouteServiceProvider::HOME);
            // }
        // }
        // dd(Auth::guard($guard));
        if ($guard == "web2" && Auth::guard($guard)->check()) {
            dd($guard . 'web2');
            return redirect('/three');
        }
        if ($guard == "web" && Auth::guard($guard)->check()) {
            dd($guard . 'web');
            return redirect('/welcome');
        }
        if (Auth::guard($guard)->check()) {
            dd(Auth::guard($guard));
            // dd($guard . 'no');
            return redirect('/welcome');
        }
        
        return $next($request);


        return $next($request);
    }
}
