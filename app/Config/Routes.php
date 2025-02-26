<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Auth
$routes->get('/', 'LandingPageController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');

// Register
$routes->get('/register', 'RegisterController::index');
$routes->post('register/register', 'RegisterController::register');

// Dashboard
$routes->get('/dashboard', 'DashController::index');

// Master Menu
$routes->get('/master-menu', 'MasterMenuController::index');
$routes->get('/view-add-master-menu', 'MasterMenuController::indexAdd');
$routes->get('/get-master-menu/(:num)', 'MasterMenuController::getById/$1');
$routes->post('/add-master-menu', 'MasterMenuController::store');
$routes->post('/delete-master-menu', 'MasterMenuController::delete');

// Master Group User
$routes->get('/master-group-user', 'MasterGroupUserController::index');
$routes->get('/view-add-master-group-user', 'MasterGroupUserController::indexAdd');
$routes->get('/get-master-group-user/(:num)', 'MasterGroupUserController::getById/$1');
$routes->post('/add-master-group-user', 'MasterGroupUserController::store');
$routes->post('/delete-master-group-user', 'MasterGroupUserController::delete');

// Users
$routes->get('/users', 'UsersController::index');
$routes->get('/view-add-users', 'UsersController::indexAdd');
$routes->get('/get-users/(:num)', 'UsersController::getById/$1');
$routes->post('/add-users', 'UsersController::store');
$routes->post('/delete-users', 'UsersController::delete');

// Master Matkul
$routes->get('/master-matkul', 'MasterMatkulController::index');
$routes->get('/view-add-master-matkul', 'MasterMatkulController::indexAdd');
$routes->get('/get-master-matkul/(:num)', 'MasterMatkulController::getById/$1');
$routes->post('/add-master-matkul', 'MasterMatkulController::store');
$routes->post('/delete-master-matkul', 'MasterMatkulController::delete');

// Profile
$routes->get('/myprofile', 'Profile::index');
$routes->get('/editprofile', 'Profile::indexEdit');
