<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// app/Config/Routes.php
$routes->get('/', 'RegisterController::index');
$routes->post('/register/processRegistration', 'RegisterController::processRegistration');
// $routes->get('/register/success', 'RegisterController::success');
$routes->get('/login', 'LoginController::loginForm');
$routes->post('/login/processLogin', 'LoginController::processLogin');
$routes->get('/blogpage', 'BlogController::index');
$routes->post('/blogStore', 'BlogController::store');
$routes->post('/updatePost', 'BlogController::update');
$routes->post('/deletePost', 'BlogController::delete');

