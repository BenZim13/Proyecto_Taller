<?php

namespace Config;

use CodeIgniter\Config\Services;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// Cargar las rutas del sistema (NO BORRAR)
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Configuración predeterminada del enrutador
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home'); // Controlador predefinido
$routes->setDefaultMethod('index'); //Metodo predefinido

$routes->get('/', 'Home::cuerpo');
$routes->get('/quienessomos', 'Home::quienessomos'); 
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/terminos', 'Home::terminos');
?>
