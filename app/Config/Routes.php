<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// app/Config/Routes.php
$routes->get('/', 'LoginController::index');
$routes->post('/register/processRegistration', 'RegisterController::processRegistration');
// $routes->get('/register/success', 'RegisterController::success');
// $routes->get('/login', 'LoginController::index');
$routes->post('/login/processLogin', 'LoginController::processLogin');
$routes->get('/blogpage', 'BlogController::index');
$routes->post('/blogStore', 'BlogController::store');
$routes->post('/updatePost', 'BlogController::update');
$routes->post('/deletePost', 'BlogController::delete');
$routes->get('registration', 'RegisterController::index');



$routes->get('/profilecreate', 'ProfileController::createprofile');
$routes->post('/newprofile', 'ProfileController::store');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/updateProfile', 'ProfileController::profileupdate');
$routes->post('/updateProfile', 'ProfileController::update');
