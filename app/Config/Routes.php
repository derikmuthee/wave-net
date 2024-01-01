<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$route['register'] = 'register';
$routes->get('register', 'Register::index');
$routes->post('register/processRegistration', 'Register::processRegistration');


$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::attemptLogin');
$routes->get('logout', 'LoginController::logout');

$routes->get('dashboard', 'LoginController::dashboard');

$routes->get('registration-failure', 'Register::registrationFailure');
// app/Config/Routes.php

$routes->get('/registration-failure', 'Register::registrationFailure');
