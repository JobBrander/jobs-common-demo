<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\App;

require '../vendor/autoload.php';

$app = new App;

$app->get('/', function (Request $request, Response $response) {
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

    $response->getBody()->write("Select a job provider to demo:");

    return $response;
});

$app->group('/search', function () {

    $this->get('/muse', '\Controllers\MuseController:index');

    return $response;
});
    
$app->run();
