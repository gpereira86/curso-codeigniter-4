<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->group('dashboard', ['namespace' => 'App\Controllers\OldTillClass12\Dashboard'],static function ($routes) {
//    $routes->get('/', 'Dashboard::index');
//    $routes->get('user', 'User::index');
//});

$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/contact', 'Contact::index', ['as' => 'contact']);
$routes->post('/contact', 'Contact::store', ['as' => 'contact_store']);
$routes->get('/products', 'Product::index', ['as' => 'products']);


//$routes->add('/teste', 'Teste::index');
//$routes->get('/contact', 'Contact::index');
//$routes->get('/contact/edit/(:any)', 'Contact::index/$1');
//$routes->get('/contact2', 'Contact::store');
//$routes->post('/user', 'User::store', ['as' => 'user_store']);
