<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Indeed;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class IndeedController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $jobs = [];
        $client = new Indeed([
            'publisher' => getenv('INDEED_PUBLISHER_ID'),
            'format' => 'json',
        ]);

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
            'provider' => 'Indeed',
            'repository' => 'https://github.com/JobBrander/jobs-indeed',
            'results' => $jobs,
        ]);
    }
}
