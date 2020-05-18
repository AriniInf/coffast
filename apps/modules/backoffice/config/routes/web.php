<?php

$namespace =  'Coffast\Backoffice\Web\Controllers';

$router->addGet('/coba', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Index',
    'action' => 'coba'
]);

$router->addGet('/', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Akun',
    'action' => 'login'
]);

$router->addGet('/register', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Akun',
    'action' => 'signup'
]);

$router->addPost('/register', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Akun',
    'action' => 'store'
]);

$router->addPost('/post-login', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Akun',
    'action' => 'postlogin'
]);

$router->addGet('/logout', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Akun',
    'action' => 'logout'
]);

$router->addGet('/pemilik/dashboard', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Dashboard',
    'action' => 'dashboardPemilik'
]);

$router->addGet('/pemilik/list-admin', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Admin',
    'action' => 'index'
]);
$router->addPost('/pemilik/tambah-admin', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Admin',
    'action' => 'tambahAdmin'
]);

$router->addGet('/pegawai/dashboard', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Dashboard',
    'action' => 'dashboardPegawai'
]);

$router->addGet('/admin/dashboard', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Dashboard',
    'action' => 'dashboardAdmin'
]);

$router->addGet('/pegawai/menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'index'
]);

$router->addGet('/pegawai/hapus-menu/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'hapusMenu'
]);

$router->addGet('/pegawai/list-pembelian', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'index'
]);

$router->addGet('/pegawai/list-penjualan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penjualan',
    'action' => 'index'
]);

$router->addGet('/menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'index'
]);

$router->addPost('/tambah-menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'tambahMenu'
]);

$router->addPost('/pegawai/edit-menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'editMenu'
]);

return $router;