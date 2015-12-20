<?php namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\Container;

class MuseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response)
    {
        $jobs = [];

        return $this->container->view->render($response, 'provider.html', [
            'name' => 'The Muse',
            'jobs' => $jobs
        ]);
    }
}
