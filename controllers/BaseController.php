<?php namespace Controllers;

use \Slim\Container;

class BaseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}
