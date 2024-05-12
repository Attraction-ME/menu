<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                 if (Auth::user()->type == 'super-admin') {
                return redirect()->route('superAdmin.dashboard');
            }else if (Auth::user()->type == 'manager') {
                return redirect()->route('manager.dashboard');
            }else if (Auth::user()->type == 'waiter') {
                return redirect()->route('waiter.dashboard');
            }
                

            }
        }

        return $next($request);
    }
}
