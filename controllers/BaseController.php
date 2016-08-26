<?php namespace Controllers;

use \Slim\Container;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

abstract class BaseController
{
    protected $provider;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response)
    {
        $keyword = $this->getKeyword($request);

        $client = $this->getClient();

        $jobs = $this->getResults($keyword, $client);

        // Send variables out to the view
        return $this->container->view->render($response, 'provider.html', [
            'keyword' => $keyword,
            'provider' => $this->provider,
            'results' => $jobs,
        ]);
    }

    protected function getKeyword(Request $request)
    {
        return $request->getQueryParams()['keyword'];
    }

    protected function getResults($keyword, $client)
    {
        try {
            // Get the jobs from the API client
            return array_map(function($job) {
                return [
                    'title' => $job->getTitle()?:'',
                    'company' => $job->getCompanyName()?:'',
                    'url' => $job->getUrl()?:'',
                    'date' => $job->getDatePosted()->format('m/d/Y'),
                ];
            }, $client->setKeyword($keyword)->getJobs()->all());
        } catch (\Exception $e) {
            return [];
        }
    }

    abstract protected function getClient();

}
