<?php

return array(
    'backoffice' => [
        'namespace' => 'Coffast\Backoffice',
        'webControllerNamespace' => 'Coffast\Backoffice\Web\Controllers',
        'className' => 'Coffast\Backoffice\Module',
        'path' => APP_PATH . '/modules/backoffice/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'User',
        'defaultAction' => 'index'
    ],

    'frontoffice' => [
        'namespace' => 'Coffast\Frontoffice',
        'webControllerNamespace' => 'Coffast\Frontoffice\Web\Controllers',
        'className' => 'Coffast\Frontoffice\Module',
        'path' => APP_PATH . '/modules/frontoffice/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'Index',
        'defaultAction' => 'index'
    ],


);