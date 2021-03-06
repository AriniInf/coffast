<?php

use Phalcon\Logger\Adapter\File as Logger;
use Phalcon\Session\Manager as Manager;
use Phalcon\Http\Response\Cookies;
use Phalcon\Security;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;
use Phalcon\Url;
use Phalcon\Escaper;
use Phalcon\Flash\Direct as FlashDirect;
use Phalcon\Flash\Session as FlashSession;
use Phalcon\Events\Event;
use Phalcon\Events\Manager as EventsManager;
use MyApp\Listeners\Listener as Listener;
use Phalcon\Session\Adapter\Stream;

$di->setShared('session',function () {
        $session = new Manager( );

        $files = new Stream(
            [
                'savePath' => '/mnt/d/git/coffast/session',
            ]
        );
        
        $session
            ->setAdapter($files)
            ->start();

        return $session;
    }
);


$di['config'] = function() use ($config) {
	return $config;
};


$di['dispatcher'] = function() use ($di, $defaultModule) {

    $eventsManager = $di->getShared('eventsManager');
    $dispatcher = new Dispatcher();
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
};

$di['url'] = function() use ($config, $di) {
	$url = new Url();

    $url->setBaseUri($config->url['baseUrl']);

	return $url;
};

$di['voltService'] = function($view) use ($config) {
    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $this);
    if (!is_dir($config->application->cacheDir)) {
        mkdir($config->application->cacheDir);
    }

    $compileAlways = $config->mode == 'DEVELOPMENT' ? true : false;

    $volt->setOptions(array(
        "path" => $config->application->cacheDir,
        "extension" => ".compiled",
        "always" => $compileAlways
    ));
    return $volt;
};

$di['view'] = function () {
    $view = new View();
    $view->setViewsDir(APP_PATH . '/common/views/');

    $view->registerEngines(
        [
            ".volt" => "voltService",
        ]
    );

    return $view;
};

$di->set(
    'security',
    function () {
        $security = new Security();
        $security->setWorkFactor(12);

        return $security;
    },
    true
);

$di->set(
    'flash',
    function () {
        $escaper = new Escaper();
        $flash = new FlashDirect($escaper);
        $flash->setImplicitFlush(false);
        $flash->setCssClasses(
            [
                'error'   => 'alert alert-danger',
                'success' => 'alert alert-success',
                'notice'  => 'alert alert-info',
                'warning' => 'alert alert-warning',
            ]
        );

        return $flash;
    }
);



$di['db'] = function () use ($config) {

    $dbAdapter = $config->database->adapter;

    return new $dbAdapter([
        "host" => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname" => $config->database->dbname,
        "port" => $config->database->port,
        "charset" => $config->database->charset
    ]);
};

