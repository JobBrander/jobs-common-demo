<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Govt;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class GovtController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $jobs = [];
        $client = new Govt;

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
            'provider' => 'Govt',
            'code_path' => 'karllhughes/jobs-common-demo/blob/v2/controllers/GovtController.php',
            'repository' => 'https://github.com/JobBrander/jobs-govt',
            'results' => $jobs,
        ]);
    }
}
