<?php 
use FSF\Core\Route;
// Route::get('/', 'Home@index');
// Route::get('/index', 'Home@index');
// Route::get('/what', 'Home@index');
// Route::get('/what/{any}', 'What@index', ['1']); 
$route = new Route();
$route->get([
    'Home@index' => 'index',
    'What@index' => 'what/'
]);