<?php

namespace Coffast\Backoffice;

use Phalcon\Di\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Coffast\Backoffice\Web\Controllers' => __DIR__ . '/Web/Controllers',
            'Coffast\Backoffice\Web\Models' => __DIR__ . '/Web/Models',
            'Coffast\Backoffice\Web\Form' => __DIR__ . '/Web/Form',
            'Coffast\Backoffice\Web\Validator' => __DIR__ . '/Web/Validator',
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
    }
}