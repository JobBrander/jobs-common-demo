<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Juju;

class JujuController extends BaseController
{
    protected $provider = "Juju";

    protected function getClient()
    {
        return new Juju([
            'partnerid' => getenv('JUJU_PARTNER_ID'),
        ]);
    }
}
