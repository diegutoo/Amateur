<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'Home::index');
$routes->get('/quienes-somos', 'QuienesSomos::index');
$routes->get('/servicios', 'Servicios::index');
$routes->get('/planes', 'Planes::index');
$routes->get('/inscripcion', 'Inscripcion::index');
$routes->post('/inscripcion/guardar', 'Inscripcion::guardar');
$routes->get('/contacto', 'Contacto::index');

$routes->get('login', 'Auth::index');          // muestra el formulario
$routes->post('login/acceder', 'Auth::acceder'); // procesa el login
$routes->get('logout', 'Auth::salir');
