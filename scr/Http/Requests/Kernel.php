<?php

namespace App\Http\Requests;

use App\Http\Middleware\HelloWorldMiddleware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel
{
    private $middlewares = [];

    public function __construct()
    {
        $this->middlewares = [
            new HelloWorldMiddleware()
        ];
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request): Response
    {
        foreach ($this->middlewares as $middleware) {
            $response = $middleware->handle($request);

            if ($response instanceof Response) {
                return $response;
            }
        }

        return new Response('Not found', 404);
    }
}
