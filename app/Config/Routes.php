<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


$routes->get('/profil', 'Profil::index');
$routes->get('/profil/visi-misi', 'Profil::visiMisiTujuan');
$routes->get('/profil/struktur-organisasi', 'Profil::strukturOrganisasi');

$routes->get('/fasilitas', 'Fasilitas::index');
$routes->get('/fasilitas/gedung', 'Fasilitas::gedung');
$routes->get('/fasilitas/laboratorium', 'Fasilitas::laboratorium');
$routes->get('/fasilitas/studio', 'Fasilitas::studio');
$routes->get('/fasilitas/spmb', 'Fasilitas::spmb');
$routes->get('/fasilitas/akreditasi', 'Fasilitas::akreditasi');

$routes->get('/berita/(:segment)', 'Berita::index/$1');
$routes->get('/Dosen', 'Dosen::index/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
