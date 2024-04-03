<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dosen', 'Dosen::index');
$routes->post('/dosen/tambah', 'Dosen::tambah');
$routes->get('login', 'Login::index', ['as' => 'login']);
$routes->get('register', 'register::index', ['as' => 'register']);
$routes->post('login/process', 'Login::process' );
$routes->post('register/process', 'register::process' );