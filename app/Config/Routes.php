<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// UNIDADES
$routes->get('/', 'Home::index');
$routes->get('unidades', 'Unidades::index');
$routes->get('unidades/nuevo', 'Unidades::nuevo');
//$routes->get('unidades/nuevo/insertar', 'Unidades::insertar');
$routes->post('unidades/insertar', 'Unidades::insertar');
$routes->get('unidades/editar/(:num)', 'Unidades::editar/$1');
$routes->post('unidades/actualizar', 'Unidades::actualizar');
$routes->get('unidades/eliminar/(:num)', 'Unidades::eliminar/$1');
$routes->get('unidades/eliminados', 'Unidades::eliminados');
$routes->get('unidades/reingresar/(:num)', 'Unidades::reingresar/$1');

// CATEGORIAS
$routes->get('categorias', 'Categorias::index');
$routes->get('categorias/nuevo', 'Categorias::nuevo');
$routes->post('categorias/insertar', 'Categorias::insertar');
$routes->get('categorias/editar/(:num)', 'Categorias::editar/$1');
$routes->post('categorias/actualizar', 'Categorias::actualizar');
$routes->get('categorias/eliminar/(:num)', 'Categorias::eliminar/$1');
$routes->get('categorias/eliminados', 'Categorias::eliminados');
$routes->get('categorias/reingresar/(:num)', 'Categorias::reingresar/$1');

//PRODUCTOS
$routes->get('productos', 'Productos::index');
$routes->get('productos/nuevo', 'Productos::nuevo');
$routes->post('productos/insertar', 'Productos::insertar');
$routes->get('productos/editar/(:num)', 'Productos::editar/$1');
$routes->post('productos/actualizar', 'Productos::actualizar');
$routes->get('productos/eliminar/(:num)', 'Productos::eliminar/$1');
$routes->get('productos/eliminados', 'Productos::eliminados');
$routes->get('productos/reingresar/(:num)', 'Productos::reingresar/$1');
// $routes->setAutoRoute(true);

//CLIENTES
$routes->get('clientes', 'Clientes::index');
$routes->get('clientes/nuevo', 'Clientes::nuevo');
$routes->post('clientes/insertar', 'Clientes::insertar');
$routes->get('clientes/editar/(:num)', 'Clientes::editar/$1');
$routes->post('clientes/actualizar', 'Clientes::actualizar');
$routes->get('clientes/eliminar/(:num)', 'Clientes::eliminar/$1');
$routes->get('clientes/eliminados', 'Clientes::eliminados');
$routes->get('clientes/reingresar/(:num)', 'Clientes::reingresar/$1');

//CONFIGURACION
$routes->get('configuracion', 'Configuracion::index');
$routes->get('configuracion/nuevo', 'Configuracion::nuevo');
$routes->post('configuracion/insertar', 'Configuracion::insertar');
$routes->get('configuracion/editar/(:num)', 'Configuracion::editar/$1');
$routes->post('configuracion/actualizar', 'Configuracion::actualizar');
$routes->get('configuracion/eliminar/(:num)', 'Configuracion::eliminar/$1');
$routes->get('configuracion/eliminados', 'Configuracion::eliminados');
$routes->get('configuracion/reingresar/(:num)', 'Configuracion::reingresar/$1');