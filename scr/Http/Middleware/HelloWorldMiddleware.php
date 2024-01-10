<?php

namespace App\Http\Middleware;

use App\Http\Middleware\Interface\Middleware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldMiddleware implements Middleware
{
    /**
     * @param Request $request
     * @return Response|null
     */
    public function handle(Request $request): ?Response
    {
        return new Response('Hello World');
    }
}
