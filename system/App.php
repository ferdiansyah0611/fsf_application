<?php 
require_once __DIR__ . '/http/Request.php';
require_once __DIR__ . '/http/Response.php';
include __DIR__ . '/core/Route.php';
include __DIR__ . '/core/Asset.php';
include __DIR__ . '/database/Query.php';

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$end = end($class);
	require_once __DIR__ . '/core/' . $end . '.php';
});
require_once DIR_URL. '/application/routing/Web.php';
