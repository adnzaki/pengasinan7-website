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
    $routes->get('sambutan-kepala-sekolah', 'Profile::welcomeMessage');
});

$routes->get('testimonial', 'Testimonial::index');
$routes->get('pendaftaran', 'Registration::index');
$routes->group('kegiatan', function (RouteCollection $routes) {
    $routes->get('ekstrakurikuler', 'Kegiatan::extracurriculars');
    $routes->get('perlombaan', 'Kegiatan::competitions');
});
