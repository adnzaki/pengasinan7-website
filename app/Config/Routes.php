<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil/tentang-sekolah', 'Profile::aboutSchool');
$routes->get('/profil/sejarah-sekolah', 'Profile::history');
$routes->get('/profil/visi-misi', 'Profile::vision');
$routes->get('/profil/ruang-kelas', 'Profile::rooms');
$routes->get('/profil/struktur-organisasi', 'Profile::organizationStructure');
