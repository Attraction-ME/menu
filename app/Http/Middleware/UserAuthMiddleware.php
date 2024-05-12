<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAuthMiddleware
{
public function handle($request, Closure $next)
{
// Check if the user is already authenticated as a regular user
    if (Auth::check() && Auth::user()->type === 0) {
// User is authenticated as a regular user, proceed with the request
//return $next($request);
        return redirect()->route('website.profile');
}

// If the user is not authenticated as a regular user, redirect to the login page
return redirect()->route('login_customer');
}
}
