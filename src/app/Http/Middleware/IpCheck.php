<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IpCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ALLOWED_ADDRESSES = [
            '172.25.0.1',
            '127.0.0.1',
        ];

        if (in_array($request->ip(), $ALLOWED_ADDRESSES)) {
            return $next($request);
        }

        abort(403);
    }
}
