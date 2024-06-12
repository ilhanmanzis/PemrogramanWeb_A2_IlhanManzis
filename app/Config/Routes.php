<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//siswa
$routes->get('/siswa', 'Siswa::index');
$routes->post('/siswa/create', 'Siswa::save');
$routes->get('/siswa/editsiswa/(:any)', 'Siswa::getEditSiswa/$1');
$routes->post('/siswa/edit/(:any)', 'Siswa::update/$1');
$routes->delete('/siswa/delete/(:any)', 'Siswa::delete/$1');

// angkatan
$routes->get('/angkatan', 'Angkatan::index');
$routes->get('/angkatan/editangkatan/(:any)', 'Angkatan::getEditAngkatan/$1');
$routes->post('/angkatan/edit/(:any)', 'Angkatan::update/$1');
$routes->delete('/angkatan/delete/(:any)', 'Angkatan::delete/$1');
$routes->post('/angkatan/create', 'Angkatan::save');

//jurusan
$routes->get('/jurusan', 'Jurusan::index');
$routes->get('/jurusan/editjurusan/(:any)', 'Jurusan::getEditJurusan/$1');
$routes->delete('/jurusan/delete/(:any)', 'Jurusan::delete/$1');
$routes->post('/jurusan/create', 'Jurusan::save');
$routes->post('/jurusan/edit/(:any)', 'Jurusan::update/$1');

//kelas
$routes->get('/kelas', 'Kelas::index');
$routes->get('/kelas/editkelas/(:any)', 'Kelas::getEditKelas/$1');
$routes->delete('/kelas/delete/(:any)', 'Kelas::delete/$1');
$routes->post('/kelas/create', 'Kelas::save');
$routes->post('/kelas/edit/(:any)', 'Kelas::update/$1');
