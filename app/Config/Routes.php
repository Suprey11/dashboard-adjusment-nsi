<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');
$routes->get('/dashboard', 'Dashboard::index'); // Assuming you have a Dashboard controller
$routes->get('/generate-password', 'PasswordGenerator::generate');
$routes->get('/create-admin', 'UserSeeder::createAdmin');
$routes->get('/create-users', 'UserSeeder::createUsers');
