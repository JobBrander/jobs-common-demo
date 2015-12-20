<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Careercast;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class CareercastController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $jobs = [];
        $client = new Careercast;

        // Get the results from the API client
        $results = $client->setKeyword('education')->getJobs();

        // See all available fields by dumping the results variable
        // var_dump($results->all());
        
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
            'provider' => 'Careercast',
            'code_path' => 'karllhughes/jobs-common-demo/blob/master/controllers/CareercastController.php',
            'repository' => 'https://github.com/JobBrander/jobs-careercast',
            'results' => $jobs,
        ]);
    }
}
