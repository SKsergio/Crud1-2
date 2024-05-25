<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/060223', 'EstudiantesController::listar');
$routes->get('/060223/agregar', 'EstudiantesController::agregar');
$routes->post('/060223/insertar', 'EstudiantesController::insertar');  // Usa match para manejar tanto GET como POST

