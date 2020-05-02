<?php

$namespace =  'Coffast\Backoffice\Web\Controllers';

$router->addGet('/coba', [
    'namespace' => $namespace,
    'module' => 'backoffice',
    'controller' => 'Index',
    'action' => 'coba'
]);



return $router;