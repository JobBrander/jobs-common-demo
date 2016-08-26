<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Careercast;

class CareercastController extends BaseController
{
    protected $provider = "Careercast";

    protected function getClient()
    {
        return new Careercast;
    }
}
