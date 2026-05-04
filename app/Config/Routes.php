<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Logicheck::index');
$routes->get('login', 'Logicheck::login');
$routes->get('register', 'Logicheck::register');
$routes->post('logicheck/auth', 'Logicheck::auth'); 
$routes->group('logicheck', function($routes) {
$routes->get('dashboard', 'Logicheck::dashboard');
$routes->get('ongkir', 'Logicheck::ongkir');
$routes->post('ongkir', 'Logicheck::ongkir');
});
