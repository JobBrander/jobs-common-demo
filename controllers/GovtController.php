<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Govt;

class GovtController extends BaseController
{
    protected $provider = "Govt";

    protected function getClient()
    {
        return new Govt;
    }
}
