<?php

namespace App\Http\Handler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class PipeLine
{
    /**
     * @param HandlerInterface $handler
     * @param list<string> $middlewares
     */
    public function __construct(
        private readonly HandlerInterface $handler,
        private array $middlewares,
    ) {
    }

    public function handle(Request $request): Response
    {
        $middleware = array_shift($this->middlewares);
        if ($middleware !== null) {
            return (new $middleware())->handle($request, [$this, 'handle']);
        }
        return $this->handler->handle($request);
    }
}
