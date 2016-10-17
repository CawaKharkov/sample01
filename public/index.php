<?php

// include composer autoloader
require __DIR__.'/../vendor/autoload.php';

use Cawakharkov\Sample01\Application;

$app = new Application();

echo $app->run();