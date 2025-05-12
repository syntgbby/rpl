<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->post('/login', 'LoginController::login');
$routes->get('/auth', 'LoginController::auth');
$routes->get('/register', 'LoginController::register');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/dashboard', 'DashController::index');

$routes->get('/rpl', 'AplikanController::index');
$routes->get('/validasi/(:segment)', 'AplikanController::validasi/$1');
$routes->post('/rpl/simpan/(:segment)', 'AplikanController::simpan/$1');

$routes->get('/status_rpl', 'AplikanController::status');
