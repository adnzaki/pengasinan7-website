<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil/sejarah-sekolah', 'Profile::history');
$routes->get('/profil/ruang-kelas', 'Profile::rooms');
