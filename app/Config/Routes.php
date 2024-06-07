<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'productos::inicio');
$routes->get('/productos', 'productos::index');
//$routes->get('/carrito', 'productos::carrito');
$routes->get('/login', 'productos::login');
$routes->get('/pago', 'productos::pago');

$routes->get('/', 'Carrito::index');
$routes->get('carrito/agregar/(:num)', 'Carrito::agregar/$1');
$routes->get('carrito/ver', 'Carrito::ver');
$routes->get('carrito/eliminar/(:num)', 'Carrito::eliminar/$1');

$routes->get('cart', 'Cart::index');
$routes->post('cart/add', 'Cart::add');
$routes->post('cart/update', 'Cart::update');
$routes->get('cart/remove/(:any)', 'Cart::remove/$1');
$routes->get('cart/clear', 'Cart::clear');

$routes->get('lista', 'Productos::index');
$routes->get('crear', 'Productos::crear');
$routes->post('guardar', 'Productos::guardar');
$routes->get('borrar/(:num)', 'proyectos::borrar/$1');