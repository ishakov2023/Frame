<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WorldMiddleware
{
    public function handle(Request $request, callable $next): Response
    {
        if (!empty($request)){
            return new Response('World');
        }
        return $next($request);
    }
}
