<?php

namespace App\Http\Handler\interface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface Handler
{
    public function handle(Request $request): Response;
}
