<?php

namespace App\Http\Middleware\Interface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface Middleware
{
    /**
     * @param Request $request
     * @return Response|null
     */
    public function handle(Request $request): ?Response;
}
