<?php namespace App\Commands\Jobs;

use App\Commands\Command;

class InstantiateClientCommand extends Command
{
    public $client;

    public function __construct($client)
    {
        $this->client = $client;
    }
}
