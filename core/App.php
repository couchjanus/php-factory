<?php
namespace Core;

use Core\{Connection, Router, Request as R};

class App
{
    public function __construct()
    {
        ob_start();
    }

    public function init()
    {
        Router::init(ROUTES)->direct(R::uri(), R::method());
    }
}
