<?php

namespace App\Http\Handler;


use App\Http\Handler\interface\Handler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldHandler implements Handler
{
    public function handle(Request $request): Response
    {
        return new Response('OK');
    }
}
