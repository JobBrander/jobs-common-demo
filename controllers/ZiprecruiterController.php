<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Ziprecruiter;

class ZiprecruiterController extends BaseController
{
    protected $provider = "Ziprecruiter";

    protected function getClient()
    {
        return new Ziprecruiter([
            'api_key' => getenv('ZIPRECRUITER_API_KEY')
        ]);
    }
}
