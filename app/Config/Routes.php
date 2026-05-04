<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route Utama & Auth
$routes->get('/', 'Logicheck::index');
$routes->get('login', 'Logicheck::login');
$routes->get('register', 'Logicheck::register');

// Route Fitur Cek Ongkir (Gunakan satu saja)
$routes->get('cek-ongkir', 'Logicheck::ongkir');

// Route untuk Proses Form (Jika nanti pakai fungsi cekOngkir)
$routes->post('layanan/cek-ongkir', 'Logicheck::cekOngkir');
// Tambahkan ini di bagian bawah Routes.php
$routes->get('logicheck/ongkir', 'Logicheck::ongkir');
$routes->post('logicheck/ongkir', 'Logicheck::ongkir');
$routes->get('logicheck/dashboard', 'Logicheck::dashboard');