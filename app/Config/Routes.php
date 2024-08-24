<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dataqurban', 'Dataqurban::index');
$routes->get('/amprah', 'Amprah::index');
$routes->get('/realisasi', 'Realisasi::index');
$routes->get('/jadwal', 'Jadwal::index');

// controler panitia //
$routes->get('/datapanitia', 'Datapanitia::index');
$routes->post('addpanitia', 'Datapanitia::store');
$routes->post('editpanitia', 'Datapanitia::update');
$routes->get('delpanitia/(:num)', 'Datapanitia::delete/$1');

// controler data cabang //
$routes->get('/datacabang', 'Datacabang::index');
$routes->post('addcabang', 'Datacabang::store');
$routes->post('editcabang', 'Datacabang::update');
$routes->get('delcabang/(:num)', 'Datacabang::delete/$1');