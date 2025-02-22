<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/contact', 'Contact::index', ['as' => 'contact', 'filter' => 'my_auth:2']);
$routes->post('/contact', 'Contact::store', ['as' => 'contact.store']);
// para colocar filtro em uma rota apenas é possível fazer aqui, no array do alias, colocar ', e escrever: filter => NOME_DO_FILTRO ex.(my_filters)
$routes->get('/admin', 'Admin::index', ['as' => 'admin', 'filter' => 'my_filters']);


// //OldTillCass17:
//$routes->get('/', 'Home::index', ['as' => 'home']);
//$routes->get('/contact', 'Contact::index', ['as' => 'contact']);
//$routes->post('/contact', 'Contact::store', ['as' => 'contact_store']);
//$routes->get('/products', 'Product::index', ['as' => 'products']);



// //OldTillCass12:

//$routes->group('dashboard', ['namespace' => 'App\Controllers\OldTillClass12\Dashboard'],static function ($routes) {
//    $routes->get('/', 'Dashboard::index');
//    $routes->get('user', 'User::index');
//});


//$routes->add('/teste', 'Teste::index');
//$routes->get('/contact', 'Contact::index');
//$routes->get('/contact/edit/(:any)', 'Contact::index/$1');
//$routes->get('/contact2', 'Contact::store');
//$routes->post('/user', 'User::store', ['as' => 'user_store']);
