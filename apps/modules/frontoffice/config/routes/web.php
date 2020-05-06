<?php

$namespace =  'Coffast\Frontoffice\Web\Controllers';


$router->addGet('/pelanggan', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Menu',
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

$router->addGet('/pelanggan/coba', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Index',
    'action' => 'coba'
]);

return $router;