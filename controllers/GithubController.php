<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Github;

class GithubController extends BaseController
{
    protected $provider = "Github";

    protected function getClient()
    {
        return new Github;
    }
}
