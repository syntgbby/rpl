<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::auth');
$routes->get('/register', 'LoginController::register');
$routes->get('/logout', 'LoginController::logout');

$routes->get('/dashboard', 'DashController::index');
