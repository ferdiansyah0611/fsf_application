<?php

include __DIR__. '/system/core/Route.php';
include __DIR__. '/system/core/Asset.php';

require_once __DIR__. '/system/App.php';
require_once __DIR__. '/config/database.php';
require_once __DIR__. '/config/default.php';
require_once __DIR__. '/application/routing/Web.php';
include __DIR__. '/system/database/Query.php';

use FSF\Core\Route;
try{
	$app = new FSF;
	$app->run();
}catch(Exception $e) {
	die($e->getMessage());
}