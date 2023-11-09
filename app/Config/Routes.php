<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Error
$routes->get('/404', 'Error::notFound');
$routes->get('/401', 'Error::unauthorized');
$routes->get('/500', 'Error::serverError');

// Auth
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->get('/password', 'Auth::password');

// Components
$routes->get('/tables', 'Components::tables');
$routes->get('/charts', 'Components::charts');
$routes->get('/layout-static', 'Components::layoutStatic');
$routes->get('/layout-sidenav-light', 'Components::layoutSidenav');
