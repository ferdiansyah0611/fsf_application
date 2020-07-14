<?php
namespace FSF\Http;
class Request
{
	public function __construct()
	{

	}
	function get()
	{
		$app = [];
		var_dump($GLOBALS);
		$data = explode('?', $_SERVER['REQUEST_URI']);
		for ($i=1; $i < count($data); $i++) { 
			# code...
			$d = join('=', explode('=', $data[$i]));
			$app = explode('&', $d);
			var_dump($app);
		}
		var_dump($app);
		var_dump(array_filter($app, function($data){
			if($data == 'data=1') {
				return true;
			}
		}));
	}
	public function post()
	{
		
	}
}