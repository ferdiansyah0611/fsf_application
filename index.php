<?php

include __DIR__. '/system/core/Route.php';

require_once __DIR__. '/system/App.php';
require_once __DIR__. '/config/database.php';
require_once __DIR__. '/config/default.php';

$app = new Ferdiansyah;
$app->run();
require_once __DIR__. '/application/routing/Web.php';
use Ferdiansyah\Core\Route;