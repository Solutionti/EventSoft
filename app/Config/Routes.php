<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/configuracion', 'Configuracion::index');
$routes->get('/deportistas', 'Deportistas::index');
$routes->get('/pedidos', 'Pedidos::index');
$routes->get('/regular', 'Regular::index');
$routes->get('/clases', 'Clases::index');
$routes->get('/ventas', 'Ventas::index');
$routes->get('/pagos', 'Pagos::index');
