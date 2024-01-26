<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\HelloWorld\HelloWorld;
use App\Http\Handler\Handler;
use App\Http\Kernel;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$kernel = new Kernel(new Handler());
$response = $kernel->handle($request);
$response->send();

$container = require_once __DIR__ . '/../bootstrap/container.php';

echo $container->get(HelloWorld::class)->hello();
