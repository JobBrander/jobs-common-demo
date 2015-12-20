<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Ziprecruiter;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class ZiprecruiterController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $jobs = [];
        $client = new Ziprecruiter([
            'api_key' => getenv('ZIPRECRUITER_API_KEY')
        ]);

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
            'provider' => 'Ziprecruiter',
            'code_path' => 'karllhughes/jobs-common-demo/blob/v2/controllers/ZiprecruiterController.php',
            'repository' => 'https://github.com/JobBrander/jobs-ziprecruiter',
            'results' => $jobs,
        ]);
    }
}
