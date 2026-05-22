<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('profil', function (RouteCollection $routes) {
    $routes->get('tentang-sekolah', 'Profile::aboutSchool');
    $routes->get('ruang-kelas', 'Profile::rooms');
    $routes->get('pendidik', 'Employee::teachers');
    $routes->get('tenaga-kependidikan', 'Employee::staff');
    $routes->get('ptk/(:any)', 'Employee::detail/$1');
    $routes->get('prasarana', 'Profile::facilities');
    $routes->get('sarana-pembelajaran', 'Profile::learningTools');
});
