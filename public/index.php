<?php

use \Dotenv\Dotenv;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\App;

require '../vendor/autoload.php';

$app = new App;

// Load .env file for local dev
$app->getContainer()['dotenv'] = new Dotenv(__DIR__.'/../');
$app->getContainer()['dotenv']->load();

// Home route
$app->get('/', '\Controllers\HomeController:index');

// Job search routes
$app->group('/search', function () {

    $this->get('/indeed', '\Controllers\IndeedController:index');
    $this->get('/govt', '\Controllers\GovtController:index');
    $this->get('/dice', '\Controllers\DiceController:index');
    $this->get('/careerbuilder', '\Controllers\CareerbuilderController:index');
    $this->get('/ziprecruiter', '\Controllers\ZiprecruiterController:index');
    $this->get('/simplyhired', '\Controllers\SimplyhiredController:index');
    $this->get('/juju', '\Controllers\JujuController:index');
    $this->get('/jobs2careers', '\Controllers\Jobs2careersController:index');
    $this->get('/github', '\Controllers\GithubController:index');
    $this->get('/careercast', '\Controllers\CareercastController:index');
    $this->get('/muse', '\Controllers\MuseController:index');

    return $response;
});
    
$app->run();
