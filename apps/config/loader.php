<?php

$loader = new \Phalcon\Loader();

/**
  * Load library namespace
  */
// var_dump(APP_PATH);die();
$loader->registerNamespaces(array(
	/**
	 * Load SQL server db adapter namespace
	 */
	'Phalcon\Db'    => APP_PATH . '/lib/Phalcon/Db',
	'MyApp\Listeners' => APP_PATH . '/Listener'

));

$loader->register();
