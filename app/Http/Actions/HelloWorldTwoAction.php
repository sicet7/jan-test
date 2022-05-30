<?php

namespace App\Http\Actions;

use App\Services\InsuranceDataService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HelloWorldTwoAction
{
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $response->getBody()->write('hello world 2');
        return $response;
    }
}