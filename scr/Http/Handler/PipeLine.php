<?php

namespace App\Http\Handler;


use App\Http\Handler\interface\Handler;
use App\Http\Middleware\interface\Middleware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PipeLine
{
    /**
     * @param Handler $handler
     * @param list<Middleware> $middlewares
     */
    public function __construct(
        private readonly Handler $handler,
        private array $middlewares,
    ) {
    }

    public function handle(Request $request): Response
    {
        $middleware = array_shift($this->middlewares);
        if ($middleware !== null) {
            return $middleware->handle($request, [$this, 'handle']);
        }
        return $this->handler->handle($request);
    }
}
