<?php

namespace App\Http\Middleware;

use Closure;

class CheckStatus
{

    public function handle($request, Closure $next)
    {
        if (auth()->user()->type == '0') {
            return $next($request);
        }
        return response()->json('Your account is registered!');

    }
}