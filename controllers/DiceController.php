<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Dice;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class DiceController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $jobs = [];
        $client = new Dice;

        // Get the results from the API client
        $results = $client->setKeyword('education')->getJobs();

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
            'provider' => 'Dice',
            'repository' => 'https://github.com/JobBrander/jobs-dice',
            'results' => $jobs,
        ]);
    }
}
