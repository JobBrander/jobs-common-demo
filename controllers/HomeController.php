<?php namespace Controllers;

use \Slim\Container;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response)
    {
        $providers = [
            'indeed',
            'govt',
            'dice',
            'careerbuilder',
            'ziprecruiter',
            'simplyhired',
            'juju',
            'jobs2careers',
            'github',
            'careercast',
            'muse',
        ];

        return $this->container->view->render($response, 'index.html', [
            'providers' => $providers
        ]);
    }
}
