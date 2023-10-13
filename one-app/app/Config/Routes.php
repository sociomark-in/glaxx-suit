<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('(:segment)', static function ($routes) {
    /* different app Routes */
    $routes->group('app', static function ($routes) {
        $routes->get('people/(:segment)/dashboard', 'Home::index/$1/$2');
    });
});
