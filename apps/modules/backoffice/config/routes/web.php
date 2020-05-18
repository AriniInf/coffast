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

$router->addGet('/karyawan/dashboard', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Dashboard',
    'action' => 'index'
]);

$router->addGet('/karyawan/menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'index'
]);

$router->addGet('/karyawan/hapus-menu/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'hapusMenu'
]);

$router->addGet('/karyawan/list-pembelian', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'index'
]);

$router->addGet('/karyawan/list-penjualan', [
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

$router->addPost('/karyawan/edit-menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'editMenu'
]);

$router->addGet('/admin/dashboard', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Dashboard',
    'action' => 'dashboardAdmin'
]);


return $router;