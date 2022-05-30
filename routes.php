<?php

/** @var \Slim\App $app */

use App\Http\Actions\HelloWorldAction;
use App\Http\Actions\HelloWorldTwoAction;
use App\Http\Middlewares\AuthMiddleware;
use Slim\Routing\RouteCollectorProxy;

//

$app->group('/', function (RouteCollectorProxy $group) {
    $group->get('/hello', HelloWorldAction::class);
})->add(AuthMiddleware::class);

$app->get('/hello2', HelloWorldTwoAction::class);