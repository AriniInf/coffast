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
    'action' => 'pegawai'
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

$router->addGet('/pemilik/laporan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Laporan',
    'action' => 'index'
]);

$router->addGet('/pemilik/list-pegawai', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pegawai',
    'action' => 'index'
]);

$router->addGet('/pemilik/belum-pegawai', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pegawai',
    'action' => 'belumPegawai'
]);

$router->addGet('/pemilik/print-laporan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Laporan',
    'action' => 'print'
]);

$router->addGet('/pemilik/list-menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'listMenu'
]);

$router->addGet('/admin/list-pegawai', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pegawai',
    'action' => 'index'
]);

$router->addPost('/admin/tambah-pegawai', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pegawai',
    'action' => 'tambahPegawai'
]);

$router->addPost('/pemilik/validate-pegawai', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pegawai',
    'action' => 'validasiPegawai'
]);

$router->addGet('/pegawai/list-penjualan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penjualan',
    'action' => 'index'
]);

$router->addGet('/admin/list-menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'index'
]);

$router->addPost('/admin/tambah-menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'tambahMenu'
]);

$router->addPost('/admin/edit-menu', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Menu',
    'action' => 'editMenu'
]);

$router->addPost('/admin/tambah-barang', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Barang',
    'action' => 'tambahBarang'
]);

$router->addPost('/admin/edit-barang/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Barang',
    'action' => 'editBarang'
]);

$router->addGet('/admin/hapus-barang/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Barang',
    'action' => 'hapusBarang'
]);

$router->addGet('/admin/list-pembelian', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'index'
]);

$router->addGet('/admin/list-barang', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Barang',
    'action' => 'index'
]);

$router->addGet('/admin/list-penggunaan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penggunaan',
    'action' => 'index'
]);

$router->addPost('/admin/add-pembelian', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'tambahPembelian'
]);

$router->addPost('/admin/tambah-penggunaan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penggunaan',
    'action' => 'tambahPenggunaan'
]);

$router->addPost('/admin/edit-penggunaan/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penggunaan',
    'action' => 'editPenggunaan'
]);

$router->addPost('/admin/edit-pembelian/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'editPembelian'
]);


$router->addPost('/pegawai/add-pembelian', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'tambahPembelian'
]);

$router->addGet('/pegawai/list-pembelian', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'pegawaiIndex'
]);

$router->addGet('/pegawai/list-penggunaan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penggunaan',
    'action' => 'pegawaiIndex'
]);

$router->addPost('/pegawai/add-penjualan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penjualan',
    'action' => 'tambahPenjualan'
]);

$router->addPost('/pegawai/tambah-penggunaan', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penggunaan',
    'action' => 'tambahPenggunaan'
]);

$router->addPost('/pegawai/edit-penggunaan/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Penggunaan',
    'action' => 'editPenggunaan'
]);

$router->addPost('/pegawai/edit-pembelian/{id}', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Pembelian',
    'action' => 'editPembelian'
]);
return $router;