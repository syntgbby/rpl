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
$routes->get('/get-table-master-menu', 'MasterMenuController::getTable');

$routes->get('/master-user', 'MasterUserController::index');
$routes->get('/view-add-master-user', 'MasterUserController::indexAdd');
$routes->post('/add-master-user', 'MasterUserController::add');
$routes->get('/get-table-master-user', 'MasterUserController::getTable');
$routes->post('/delete-master-user', 'MasterUserController::delete');

$routes->get('editprofile', 'Profile::index');



