<?php

$namespace =  'Coffast\Frontoffice\Web\Controllers';


$router->addGet('/pelanggan', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Index',
    'action' => 'index'
]);

$router->addGet('/pelanggan/login', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Akun',
    'action' => 'login'
]);

$router->addPost('/pelanggan/post-login', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Akun',
    'action' => 'postlogin'
]);

$router->addGet('/pelanggan/register', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Akun',
    'action' => 'signup'
]);

$router->addPost('/pelanggan/store', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Akun',
    'action' => 'store'
]);

$router->addGet('/pelanggan/halaman', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Index',
    'action' => 'halaman'
]);

$router->addGet('/pelanggan/logout', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Akun',
    'action' => 'logout'
]);

return $router;