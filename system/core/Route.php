<?php
namespace FSF\Core;

use FSF\Http\Request;

class Route
{
	public function __construct()
	{
		$this->request = new Request();
	}
	public function get(Array $data)
	{
		var_dump($this->request->get());
		foreach($data as $key => $val) {
			echo $key.'<br>';
		}
		var_dump(array_keys($data));
		var_dump(array_search($_GET['url'],$data));
		print_r(preg_match_all('/[a-z]\/\d/', '/what/1'));
		var_dump($data);
		var_dump(explode('$', array_search('/what/$1',$data)));
		if(array_search($_GET['url'],$data) !== false){
			echo array_search($_GET['url'],$data);
		}
	}
	// static function get(String $url, String $controller, $params = [])
	// {
	// 	// var_dump($_SERVER['REQUEST_URI']);
	// 	var_dump(explode('{any}',$url));
	// 	$d = explode('{any}',$url);
		
		
	// 	if($_SERVER['REQUEST_URI'] == $url) {
	// 		// echo 'sama';
	// 		$explode = explode('@', $controller);
	// 		$app = [];
	// 		if(file_exists(DIR_URL . '/application/controllers/' . $explode[0] . '.php')){
	// 			require_once DIR_URL . '/application/controllers/' . $explode[0] . '.php';
	// 			$app['controller'] = new $explode[0];
	// 			if(method_exists($app['controller'], $explode[1])){
	// 				$app['method'] = $explode[1];
	// 				// var_dump('ok');
	// 				call_user_func_array([$app['controller'], $app['method']], array_values($params));
	// 			}
	// 		}
	// 	} else {
	// 		$param_explode = count(explode('{any}',$url));
	// 		if($param_explode == 2) {
	// 			var_dump($params);
	// 			$explode = explode('@', $controller);
	// 			$app = [];
	// 			if(file_exists(DIR_URL . '/application/controllers/' . $explode[0] . '.php')){
	// 				require_once DIR_URL . '/application/controllers/' . $explode[0] . '.php';
	// 				$app['controller'] = new $explode[0];
	// 				if(method_exists($app['controller'], $explode[1])){
	// 					$app['method'] = $explode[1];
	// 					// var_dump('ok');
	// 					call_user_func_array([$app['controller'], $app['method']], array_values($params));
	// 				}
	// 			}
	// 		}
	// 	}
	// 	// var_dump($url);
	// 	// var_dump($controller);
	// }
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