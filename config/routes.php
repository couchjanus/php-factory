<?php

$router->get('', 'DashboardController@index');
$router->get('workers/create', 'DashboardController@create');
$router->post('workers/create', 'DashboardController@store');

$router->get('404', 'PagesController@notFound');

$router->get('payrolls', 'PayrollController@index');
$router->get('payrolls/create/{id}', 'PayrollController@create');
$router->post('payrolls/create/{id}', 'PayrollController@create');
