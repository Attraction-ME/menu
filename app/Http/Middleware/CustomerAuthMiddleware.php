<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('customers')->check()) {
            return $next($request);
        }

        return redirect()->route('login_customer')->with('error', 'You Must Login To Continue '); // Redirect to the customer login route
    }
}