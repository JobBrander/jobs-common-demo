<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Careerbuilder;

class CareerbuilderController extends BaseController
{
    protected $provider = "Careerbuilder";

    protected function getClient()
    {
        return new Careerbuilder([
            'DeveloperKey' => getenv('CAREERBUILDER_KEY'),
        ]);
    }
}
