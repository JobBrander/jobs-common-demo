<?php namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dotenv\Dotenv;

class MuseController
{
    public function __construct()
    {
        $dotenv = new Dotenv('../');
        $dotenv->load();
        print_r($dotenv); exit;
    }

    public function index(Request $request, Response $response)
    {
        echo "TEST"; exit;
    }
}
