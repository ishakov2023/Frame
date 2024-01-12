<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\HelloWorld\HelloWorld;



$hello = new HelloWorld();

echo $hello->hello();
