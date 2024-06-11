<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/siswa', 'Siswa::index');


// angkatan
$routes->get('/angkatan', 'Angkatan::index');
$routes->get('/angkatan/editangkatan/(:any)', 'Angkatan::getEditAngkatan/$1');
$routes->post('/angkatan/edit/(:any)', 'Angkatan::update/$1');
$routes->delete('/angkatan/delete/(:any)', 'Angkatan::delete/$1');
$routes->post('/angkatan/create', 'Angkatan::save');
