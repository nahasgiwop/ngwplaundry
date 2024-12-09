<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('auth', function ($routes) {
    $routes->get('login', 'Auth\AuthController::login');
    $routes->get('register', 'Auth\AuthController::register');
    $routes->get('register', 'AuthController::register');

});

//$routes->get('/', 'Home::index');
$routes->get('/', 'PublicController::home');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/admin', 'Admin::index');
//$routes->get('orders', 'OrdersController::index'); // Menambahkan route untuk akses "orders"

//$routes->get('orders', 'OrdersController::index');



// rute order
$routes->get('orders', 'OrdersController::index');
$routes->get('orders/create', 'OrdersController::create');
$routes->post('orders/store', 'OrdersController::store');
$routes->get('orders/edit/(:num)', 'OrdersController::edit/$1');
$routes->post('orders/update/(:num)', 'OrdersController::update/$1');
$routes->post('orders/delete/(:num)', 'OrdersController::delete/$1');


// rute payments
$routes->group('payments', function ($routes) {
    $routes->get('/', 'PaymentsController::index');          // Menampilkan daftar pembayaran
    $routes->get('create', 'PaymentsController::create');    // Form tambah pembayaran
    $routes->post('store', 'PaymentsController::store');     // Simpan data pembayaran
    $routes->get('edit/(:num)', 'PaymentsController::edit/$1'); // Form edit pembayaran
    $routes->post('update/(:num)', 'PaymentsController::update/$1'); // Update data pembayaran
    $routes->get('delete/(:num)', 'PaymentsController::delete/$1'); // Hapus data pembayaran
});



// rute pelnggan

$routes->get('/customers', 'Customers::index');
$routes->get('/customers/create', 'Customers::create');
$routes->post('/customers/store', 'Customers::store');
$routes->get('/customers/edit/(:num)', 'Customers::edit/$1');
$routes->post('/customers/update/(:num)', 'Customers::update/$1');
$routes->get('/customers/delete/(:num)', 'Customers::delete/$1');


// Rute re[ort]
$routes->get('reports', 'Reports::index'); // Rute untuk menampilkan halaman laporan
$routes->get('reports/create', 'Reports::create');  // Rute untuk membuat laporan baru
$routes->post('reports/store', 'Reports::store');  // Rute untuk menyimpan laporan
$routes->get('reports/edit/(:num)', 'Reports::edit/$1'); // Rute untuk mengedit laporan
$routes->post('reports/update/(:num)', 'Reports::update/$1'); // Rute untuk memperbarui laporan
$routes->get('reports/delete/(:num)', 'Reports::delete/$1'); // Rute untuk menghapus laporan

$routes->post('dashboard', 'DashboardController::handlePost');
$routes->get('dashboard', 'DashboardController::index');        // Rute untuk GET
$routes->post('logout', 'AuthController::logout');
$routes->get('logout', 'AuthController::logout');

// Uaer
$routes->group('auth', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
    $routes->get('auth/register', 'AuthController::register');
    $routes->post('auth/doRegister', 'AuthController::doRegister');
    $routes->get('auth/login', 'AuthController::login');
    $routes->post('auth/handleLogin', 'AuthController::handleLogin');
    $routes->get('auth/logout', 'AuthController::logout');
});
$routes->group('auth', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
    $routes->get('register', 'AuthController::register');   // Halaman registrasi
    $routes->post('doRegister', 'AuthController::doRegister'); // Proses registrasi
});

$routes->get('auth/login', 'AuthController::login');
$routes->post('auth/login', 'AuthController::doLogin');
$routes->get('auth/logout', 'AuthController::logout');
$routes->get('profile', 'UserController::profile', ['filter' => 'auth']);

$routes->get('auht/register', 'AuthController::register');
$routes->post('auth/register', 'AuthController::doRegister');


$routes->get('dashboard', 'Auth\AuthController::login');
$routes->get('register', 'Auth\AuthController::register');
$routes->post('login', 'Auth\AuthController::handleLogin');
$routes->post('register', 'Auth\AuthController::handleRegister');


$routes->get('login', 'Auth\AuthController::login');

$routes->get('register', 'Auth\AuthController::register');
$routes->post('login', 'Auth\AuthController::doLogin');  // Rute untuk login
$routes->post('register', 'Auth\AuthController::handleRegister');
$routes->get('logout', 'Auth\AuthController::logout');  // Rute untuk logout

$routes->get('login', 'Auth\AuthController::login');
$routes->post('auth/handleLogin', 'Auth\AuthController::handleLogin');

//
$routes->get('login', 'Auth\AuthController::login');
$routes->get('register', 'Auth\AuthController::register');
$routes->post('login', 'Auth\AuthController::handleLogin');
$routes->post('register', 'Auth\AuthController::handleRegister');
$routes->get('logout', 'Auth\AuthController::logout');


// Rute untuk menampilkan halaman register
$routes->get('register', 'Auth\AuthController::register');

// Rute untuk menangani pendaftaran pengguna
$routes->post('auth/handleRegister', 'Auth\AuthController::handleRegister');

// Rute untuk menampilkan halaman login
$routes->get('login', 'Auth\AuthController::login');

// Rute untuk menangani login
$routes->post('auth/handleLogin', 'Auth\AuthController::handleLogin');


// Service

$routes->get('/service', 'ServiceController::index');             // Menampilkan daftar layanan
$routes->get('/service/create', 'ServiceController::create');     // Menampilkan form tambah
$routes->post('/service/store', 'ServiceController::store');      // Menyimpan data baru
$routes->get('/service/edit/(:num)', 'ServiceController::edit/$1'); // Menampilkan form edit
$routes->post('/service/update/(:num)', 'ServiceController::update/$1'); // Memperbarui data
$routes->get('/service/delete/(:num)', 'ServiceController::delete/$1'); // Menghapus layanan


// Rute Penyediaan

$routes->get('/inventory', 'InventoryController::index');
$routes->get('/inventory/create', 'InventoryController::create');
$routes->post('/inventory/store', 'InventoryController::store');
$routes->get('/inventory/edit/(:num)', 'InventoryController::edit/$1');
$routes->post('/inventory/update/(:num)', 'InventoryController::update/$1');
$routes->get('/inventory/delete/(:num)', 'InventoryController::delete/$1');


$routes->get('profile', 'UserController::profile', ['filter' => 'auth']);



// Rute Employee
$routes->get('/employee', 'EmployeeController::index');
$routes->get('/employee/create', 'EmployeeController::create');
$routes->post('/employee/store', 'EmployeeController::store');
$routes->get('/employee/edit/(:num)', 'EmployeeController::edit/$1');
$routes->post('/employee/update/(:num)', 'EmployeeController::update/$1');
$routes->get('/employee/delete/(:num)', 'EmployeeController::delete/$1');
$routes->add('some-route', 'SomeController::someMethod', ['filter' => 'auth']);


// Rute pengaturan

$routes->get('/settings', 'SettingsController::index');
$routes->post('/settings/update', 'SettingsController::update');


//