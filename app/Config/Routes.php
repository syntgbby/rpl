<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');

$routes->get('/dashboard', 'DashController::index');

$routes->get('/master-menu', 'MasterMenuController::index');
$routes->get('/view-add-master-menu', 'MasterMenuController::indexAdd');
$routes->get('/get-master-menu/(:num)', 'MasterMenuController::getById/$1');
$routes->post('/add-master-menu', 'MasterMenuController::add');
$routes->post('/delete-master-menu', 'MasterMenuController::delete');

$routes->get('/master-user', 'MasterUserController::index');
$routes->get('/view-add-master-user', 'MasterUserController::indexAdd');
$routes->get('/get-master-user/(:num)', 'MasterUserController::getById/$1');
$routes->post('/add-master-user', 'MasterUserController::add');
$routes->post('/delete-master-user', 'MasterUserController::delete');