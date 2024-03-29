<?php

define('HOST', 'localhost');
define('DBUSER', 'root');
define('DBPASSWORD', 'ghbdtn');
define('DATABASE', 'factory');

const DRIVER = 'mysql';
const CHARSET = 'utf8mb4';

return [
    'db' => [
        'driver' => DRIVER,
        'dbname' => DATABASE,
        'host'    => HOST,
        'charset' => CHARSET,
    ],
    'user' => DBUSER,
    'password' => DBPASSWORD,
    'errmode' => PDO::ERRMODE_EXCEPTION,
    'options' => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]
];  