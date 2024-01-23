<?php

namespace App\Http\Middleware;

final class Middlewares
{
    private const MIDDLEWARES = [
        HelloWorldMiddleware::class,
    ];

    public static function get(): array
    {
        return array_filter(self::MIDDLEWARES, function ($middleware) {
            return new $middleware() instanceof MiddlewareInterface;
        });
    }
}
