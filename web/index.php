<?php

require __DIR__ . '/../vendor/autoload.php';

use MyApi\Components\Config;
use Sensorario\Container\Container;
use Sensorario\WheelFramework\Components\Application;

$output = (new Application(
    new Config(),
    new Container()
))->run();

echo $output;
