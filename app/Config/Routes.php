<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/login', 'MainController::login');
$routes->post('/save', 'MainController::save');
$routes->get('/admin', 'MainController::admin');
