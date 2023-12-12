<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BlogController::index');
$routes->post('/blogStore', 'BlogController::store');
$routes->post('/updatePost', 'BlogController::update');
$routes->post('/deletePost', 'BlogController::delete');