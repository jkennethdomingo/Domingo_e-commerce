<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//View Routes
$routes->get('/', 'ViewController::index');
$routes->get('/login', 'ViewController::login', ['filter' => 'loginGuard']);
$routes->get('/admin', 'ViewController::admin', ['filter' => 'adminGuard']);
$routes->get('/table', 'ViewController::tables', ['filter' => 'adminGuard']);
$routes->get('/shop', 'ViewController::shop', ['filter' => 'authGuard']);


//Authentication Routes
$routes->post('/AuthLogin', 'Authentication::AuthLogin');
$routes->get('logout', 'Authentication::logout');

//Function Routes
$routes->post('/save', 'MainController::save');
