<?php

namespace App\Http\Handler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface HandlerInterface
{
    public function handle(Request $request): Response;
}
