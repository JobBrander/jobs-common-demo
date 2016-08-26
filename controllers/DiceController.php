<?php namespace Controllers;

use \JobBrander\Jobs\Client\Providers\Dice;

class DiceController extends BaseController
{
    protected $provider = "Dice";

    protected function getClient()
    {
        return new Dice;
    }
}
