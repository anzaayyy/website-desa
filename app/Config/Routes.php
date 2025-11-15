<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('sejarah', 'SejarahController::index');
$routes->get('visimisi', 'VimiController::index');
$routes->get('struktur', 'StrukturController::struktur');
$routes->get('perangkat', 'PerangkatController::perangkat');
$routes->get('berita', 'BeritaController::index');
$routes->get('berita/(:segment)', 'BeritaController::detail/$1');
$routes->get('pengumuman', 'PengumumanController::index');
$routes->get('pengumuman/(:segment)', 'PengumumanController::detail/$1');
$routes->get('agenda', 'AgendaController::index');
$routes->get('agenda/(:segment)', 'AgendaController::detail/$1');
$routes->get('penduduk', 'PendudukController::index');
$routes->get('wilayah', 'WilayahController::index');
$routes->get('lembaga', 'LembagaController::index');
$routes->get('sarana_prasarana', 'SarprasController::index');
$routes->get('APBDes', 'APBDesController::index');
$routes->get('realisasi_anggaran', 'RealranController::index');
$routes->get('pembangunan', 'PembangunanController::index');
$routes->get('persuratan', 'PersuratanController::index');
$routes->get('layanan_mandiri', 'LamanController::index');
$routes->get('informasi_layanan', 'InforlayananController::index');
$routes->get('kontak', 'KontakController::index');
$routes->get('kritik', 'KritikController::index');
$routes->get('pengaduan', 'PengaduanController::index');

// LOGIN ADMIN
$routes->get('login', 'AuthController::login');
$routes->post('login/process', 'AuthController::processLogin');
$routes->post('logout', 'AuthController::logout');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
// ADMIN DASHBOARD
    $routes->get('/', 'Admin\DashboardController::index');
    $routes->get('dashboard', 'Admin\DashboardController::index');

// ADMIN SEJARAH
    $routes->get('sejarah', 'Admin\SejarahController::index');
    $routes->post('sejarah/store', 'Admin\SejarahController::store');
    $routes->get('sejarah/edit/(:num)', 'Admin\SejarahController::edit/$1');
    $routes->post('sejarah/update/(:num)', 'Admin\SejarahController::update/$1');
    $routes->get('sejarah/delete/(:num)', 'Admin\SejarahController::delete/$1');

// ADMIN VISI MISI
    $routes->get('visimisi', 'Admin\VisimisiController::index');
    $routes->get('visimisi/edit/(:num)', 'Admin\VisimisiController::edit/$1');
    $routes->post('visimisi/update/(:num)', 'Admin\VisimisiController::update/$1');

// ADMIN BERITA
    $routes->get('berita', 'Admin\BeritaController::index');
    $routes->get('berita/create', 'Admin\BeritaController::create');
    $routes->post('berita/store', 'Admin\BeritaController::store');
    $routes->get('berita/edit/(:num)', 'Admin\BeritaController::edit/$1');
    $routes->post('berita/update/(:num)', 'Admin\BeritaController::update/$1');
    $routes->get('berita/delete/(:num)', 'Admin\BeritaController::delete/$1');

// ADMIN PENGUMUMAN
    $routes->get('pengumuman', 'Admin\PengumumanController::index');
    $routes->get('pengumuman/create', 'Admin\PengumumanController::create');
    $routes->post('pengumuman/store', 'Admin\PengumumanController::store');
    $routes->get('pengumuman/edit/(:num)', 'Admin\PengumumanController::edit/$1');
    $routes->post('pengumuman/update/(:num)', 'Admin\PengumumanController::update/$1');
    $routes->get('pengumuman/delete/(:num)', 'Admin\PengumumanController::delete/$1');

// // Admin Agenda
    $routes->get('agenda', 'Admin\AgendaController::index');
    $routes->get('agenda/create', 'Admin\AgendaController::create');
    $routes->post('agenda/store', 'Admin\AgendaController::store');
    $routes->get('agenda/edit/(:num)', 'Admin\AgendaController::edit/$1');
    $routes->post('agenda/update/(:num)', 'Admin\AgendaController::update/$1');
    $routes->get('agenda/delete/(:num)', 'Admin\AgendaController::delete/$1');

    // ADMIN STRUKTUR
    $routes->get('struktur', 'Admin\StrukturController::index');
    $routes->get('struktur/create', 'Admin\StrukturController::create');
    $routes->post('struktur/store', 'Admin\StrukturController::store');
    $routes->get('struktur/edit/(:num)', 'Admin\StrukturController::edit/$1');
    $routes->post('struktur/update/(:num)', 'Admin\StrukturController::update/$1');
    $routes->post('struktur/delete/(:num)', 'Admin\StrukturController::delete/$1');

    // ADMIN PERANGKAT
    $routes->get('perangkat', 'Admin\PerangkatController::index');
    $routes->get('perangkat/create', 'Admin\PerangkatController::create');
    $routes->post('perangkat/store', 'Admin\PerangkatController::store');
    $routes->get('perangkat/edit/(:num)', 'Admin\PerangkatController::edit/$1');
    $routes->post('perangkat/update/(:num)', 'Admin\PerangkatController::update/$1');
    $routes->get('perangkat/delete/(:num)', 'Admin\PerangkatController::delete/$1');
});
