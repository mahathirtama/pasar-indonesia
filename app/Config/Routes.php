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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// users routes
$routes->get('/', 'User::index');
$routes->get('/profile', 'User::profile');
$routes->get('/alamat', 'User::alamat');
$routes->get('/reset', 'User::reset');
$routes->get('/profile/ubah/(:any)', 'User::ubah/$1');
$routes->get('/buah', 'Buah::index');
$routes->get('/sayur', 'Sayur::index');
$routes->get('/daging', 'Daging::index');
$routes->get('/catatan', 'Catatan::index');
$routes->get('/catatan/admin', 'Catatan::admin');
$routes->get('/Pasar/pal', 'Pasar::pal');
$routes->get('Pasar/minggu', 'Pasar::minggu');
$routes->get('Pasar/cisalak', 'Pasar::cisalak');
$routes->get('Beli/sayur/(:any)', 'beli::sayur/$1');
$routes->get('Beli/daging/(:any)', 'beli::daging/$1');
$routes->get('Beli/buah/(:any)', 'beli::buah/$1');

// pedagang routes
$routes->get('/pedagang/listorder', 'Pedagang::index');
$routes->get('/pedagang/order/(:any)', 'Pedagang::order/$1');
$routes->get('/pedagang/save/(:any)', 'Pedagang::save/$1');
$routes->get('/pedagang/catatan', 'Pedagang::catatan');

// admin routes
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/createBuah', 'Buah::create', ['filter' => 'role:admin']);
$routes->get('/admin/createSayur', 'Sayur::create', ['filter' => 'role:admin']);
$routes->get('/admin/createDaging', 'Daging::create', ['filter' => 'role:admin']);
$routes->get('/admin/buah', 'Buah::dataBuah', ['filter' => 'role:admin']);
$routes->get('/admin/daging', 'Daging::dataDaging', ['filter' => 'role:admin']);
$routes->get('/admin/sayur', 'Sayur::dataSayur', ['filter' => 'role:admin']);
$routes->get('/admin/sayur/(:any)', 'Sayur::detailSayur/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/sayur/delete/(:num)', 'Sayur::deleteSayur/$1', ['filter' => 'role:admin']);
$routes->get('/admin/buah/(:any)', 'Buah::detailBuah/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/buah/delete/(:num)', 'Buah::deleteBuah/$1', ['filter' => 'role:admin']);
$routes->get('/admin/daging/(:any)', 'Daging::detailDaging/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/daging/delete/(:num)', 'Daging::deleteDaging/$1', ['filter' => 'role:admin']);

/**
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
