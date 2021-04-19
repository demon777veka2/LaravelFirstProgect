<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IPAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (request()->ip() != "127.0.0.1") {
            abort(403, 'Access denided.');
        }

        return $next($request);
    }
}
