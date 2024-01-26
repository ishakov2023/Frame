<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HelloWorldMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, callable $next): Response
    {
        return new Response('');
    }
}
