<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'productos::inicio');
$routes->get('/productos', 'productos::index');

$routes->get('lista', 'Productos::index');
$routes->get('crear', 'Productos::crear');
$routes->post('guardar', 'Productos::guardar');
$routes->get('borrar/(:num)', 'proyectos::borrar/$1');