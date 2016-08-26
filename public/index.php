<?php

use \Dotenv\Dotenv;
use \Slim\App;
use \Slim\Views\Twig;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

// Load .env file for local dev
if (file_exists(__DIR__.'/../.env')) {
    $container['dotenv'] = new Dotenv(__DIR__.'/../');
    $container['dotenv']->load();
}

// Register Twig views
$container['view'] = function ($c) {
    $view = new Twig('./views', ['cache' => false]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $c['router'],
        $c['request']->getUri()
    ));

    return $view;
};

// Inject dependencies into the application
$app = new App($container);

// Home route
$app->get('/', '\Controllers\HomeController:index');

// Job search routes
$app->group('/search', function () {
    $this->get('', function (Request $request, Response $response)
        {
            $query = $request->getQueryParams();
            return $response->withRedirect(
                '/search/'.$query['provider'].'?keyword='.$query['keyword']
            );
        }
    );
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
});

$app->run();
