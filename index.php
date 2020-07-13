<?php
require_once __DIR__. '/config/default.php';
require_once __DIR__. '/config/database.php';
require_once __DIR__. '/system/App.php';

if(!session_id())session_start();

try{
	$app = new FSF;
	$app->run();
}catch(Exception $e) {
	die($e->getMessage());
	print_r(error_get_last());
}