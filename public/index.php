<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Http\Handler\HelloWorldHandler;
use App\Http\Middleware\HelloWorldMiddleware;
use App\Http\Middleware\WorldMiddleware;
use App\Http\Requests\Kernel;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$kernel = new Kernel(
    handler: new HelloWorldHandler(),
    middlewares: [
        new HelloWorldMiddleware(),
        new WorldMiddleware()],
);
$response = $kernel->handle($request);
$response->send();
