<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Indeed;

class IndeedController extends BaseController
{
    protected $provider = "Indeed";

    protected function getClient()
    {
        return new Indeed([
            'publisher' => getenv('INDEED_PUBLISHER_ID'),
            'format' => 'json',
        ]);
    }
}
