<?php

namespace App\Http\Middleware;

use Closure;

class ExampleMiddleware
{
    public function handle($request, Closure $next)
    {
        app('log')->debug('middleware ran for path: ' . $request->path());
        return $next($request);
    }
}
