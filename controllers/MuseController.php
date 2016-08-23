<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Muse;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class MuseController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $jobs = [];
        $client = new Muse;

        // Get the results from the API client
        $results = $client->setCategory('Education')->getJobs();

        // Loop through, set up array of jobs for the table
        foreach ($results->all() as $result) {
            $jobs[] = [
                'title' => $result->getTitle(),
                'company' => $result->getCompanyName(),
                'url' => $result->getUrl(),
            ];
        }

        // Send variables out to the view
        return $this->container->view->render($response, 'provider.html', [
            'provider' => 'The Muse',
            'repository' => 'https://github.com/JobBrander/jobs-muse',
            'results' => $jobs,
        ]);
    }
}
