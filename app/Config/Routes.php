<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Home::index');


// Route for Pemasukan controller
$routes->get('pemasukan', 'Pemasukan::index');