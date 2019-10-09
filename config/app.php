<?php
    define('ROOT', dirname(__DIR__));
    const APP = ROOT.'/app';
    const VIEWS = ROOT.'/app/Views';
    
    const CONTROLLERS ="\App\Controllers\\";

    const MODELS = ROOT.'/app/Models/';
    const CONFIG = ROOT.'/config';
    
    const CORE = ROOT.DIRECTORY_SEPARATOR.'core';
    const EXT = '.php';

    define('DB_CONFIG_FILE', CONFIG.'/db.php');
    const ROUTES = CONFIG.'/routes'.EXT;
