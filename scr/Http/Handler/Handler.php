<?php

namespace App\Http\Handler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class Handler implements HandlerInterface
{
    public function handle(Request $request): Response
    {
        return new Response('OK');
    }
}
