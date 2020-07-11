<?php 
spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$end = end($class);
	require_once __DIR__ . '/core/' . $end . '.php';
});