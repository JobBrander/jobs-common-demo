<?php namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class MuseController
{
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response)
    {
        // Get env to get .env variables
        echo getenv('XXX'); exit;
        return $response->getBody()->write("Muse job listings");
    }
}
