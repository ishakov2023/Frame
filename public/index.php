<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\HelloWorld\HelloWorld;
use App\Http\Requests\Kernel;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$kernel = new Kernel();

$response = $kernel->handle($request);

$response->send();



$hello = new HelloWorld();

echo $hello->hello();
