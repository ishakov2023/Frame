<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$services = require_once __DIR__ . "/services.php";
foreach ($services['providers'] as $value) {
    $class = new $value();
    $class($containerBuilder);
}
return $containerBuilder->build();
