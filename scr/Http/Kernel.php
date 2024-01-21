<?php

namespace App\Http;

use App\Http\Handler\HandlerInterface;
use App\Http\Handler\PipeLine;
use App\Http\Middleware\Middlewares;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class Kernel
{
    /**
     * @param HandlerInterface $handler
     */
    public function __construct(
        private readonly HandlerInterface $handler,
    ) {
    }

    public function handle(Request $request): Response
    {
        return (new PipeLine($this->handler, Middlewares::get()))->handle($request);
    }
}
