<?php

include __DIR__. '/system/core/Route.php';
include __DIR__. '/system/core/Asset.php';
include __DIR__. '/system/core/DB.php';

require_once __DIR__. '/system/App.php';
require_once __DIR__. '/config/database.php';
require_once __DIR__. '/config/default.php';
require_once __DIR__. '/application/routing/Web.php';

use FSF\Core\Route;

$app = new FSF;
$app->run();