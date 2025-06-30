<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/auth/login', 'Auth::index');

$routes->get('/auth/register', 'Auth::register');

$routes->post('auth/save', 'Auth::save');

$routes->post('auth/check', 'Auth::check');

$routes->get('dashboard/dash', 'Dashboard::dash');



