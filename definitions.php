<?php

use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

use function DI\autowire;
use function DI\get;

return [
    Psr17Factory::class => autowire(Psr17Factory::class),

    ResponseFactoryInterface::class => get(Psr17Factory::class),
    RequestFactoryInterface::class => get(Psr17Factory::class),
    StreamFactoryInterface::class => get(Psr17Factory::class),
    UriFactoryInterface::class => get(Psr17Factory::class),
    UploadedFileFactoryInterface::class => get(Psr17Factory::class),
    ServerRequestFactoryInterface::class => get(Psr17Factory::class),
];