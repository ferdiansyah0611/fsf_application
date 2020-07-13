<?php
namespace FSF\Core;

class Route
{
	static function get(String $url, String $controller)
	{
		$explode = explode('@', $controller);
		if(file_exists(DIR_URL . '/application/controllers/' . $explode[0] . '.php')) {
			require_once DIR_URL . '/application/controllers/' . $explode[0] . '.php';
			if(method_exists(new $explode[0], $explode[1])) {
				var_dump('ok');
			}
		}
		var_dump($url);
		var_dump($controller);
	}
	static function post(String $url, String $controller)
	{

	}
	static function put(String $url, String $controller)
	{

	}
	static function delete(String $url, String $controller)
	{

	}
}