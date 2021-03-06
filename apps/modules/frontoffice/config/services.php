<?php

use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;

$di['view'] = function () {
    $view = new View();
    $view->setViewsDir(__DIR__ . '/../Web/Views/');

    $view->registerEngines(
        [
            ".volt" => "voltService",
        ]
    );

    return $view;
};