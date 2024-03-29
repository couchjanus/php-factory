<?php

date_default_timezone_set('Europe/Kiev');    
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_NOTICE | E_STRICT | E_DEPRECATED);

require realpath(__DIR__) . '/vendor/autoload.php';
require_once realpath(__DIR__).'/config/app.php';

use Core\App;
$app = new App();
$app->init();
