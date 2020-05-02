<?php

$namespace =  'Coffast\Frontoffice\Web\Controllers';


$router->addGet('/pelanggan', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Index',
    'action' => 'index'
]);

$router->addGet('/pelanggan/coba', [
    'namespace' => $namespace,
    'module' => 'frontoffice',
    'controller' => 'Index',
    'action' => 'coba'
]);

return $router;