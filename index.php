<?php

use DI\Bridge\Slim\Bridge;
use DI\ContainerBuilder;

require __DIR__ . '/vendor/autoload.php';

$builder = new ContainerBuilder();

$builder->addDefinitions(__DIR__ . '/definitions.php');

$app = Bridge::create($builder->build());

$app->addRoutingMiddleware();

require_once __DIR__ . '/routes.php';

$app->run();