<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/upload', 'Admin::upload');
$routes->post('/postupload', 'Admin::postupload');
$routes->get('/add', 'Admin::addcategory');
$routes->post('/addpost', 'Admin::postcategory');
$routes->get('/load', 'Home::load');
$routes->get('/singup', 'Auth::singup');
$routes->post('/singup', 'Auth::singup');

$routes->get('/logout', 'Auth::logout');

$routes->get('/login', 'Auth::login',['filter' => 'authFilter']);
$routes->post('/login', 'Auth::login');








$routes->get('/delete/(:any)', 'Admin::delete/$1');
$routes->get('/edit/(:any)', 'Admin::edit/$1');
$routes->post('/update', 'Admin::update');




$routes->get('/(:any)/(:any)', 'Home::view/$1/$2');
$routes->get('/(:any)', 'Home::kk/$1');
