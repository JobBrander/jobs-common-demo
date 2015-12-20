<?php namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class MuseController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $jobs = [];

        return $this->container->view->render($response, 'provider.html', [
            'name' => 'The Muse',
            'jobs' => $jobs
        ]);
    }
}
