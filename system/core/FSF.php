<?php 

class FSF
{
	private $controller = 'Home';
	private $methods = 'index';
	private $params = [];

	public function __construct()
	{

	}

	public function run()
	{
		$url = $this->parse();

		//controller
		if(file_exists(DIR_URL . '/application/controllers/' . $url[0] . '.php')){
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once DIR_URL . '/application/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;
		

		//method
		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->methods = $url[1];
				unset($url[1]);
			}
		}

		//params
		if(!empty($url)){
			$this->params = array_values($url);
		}
		var_dump($url);
		//running controller & methods, with send params if have value
		call_user_func_array([$this->controller, $this->methods], $this->params);
	}
	public function parse()
	{
		if(isset($_GET['url'])) {
			$data = $_GET['url'];
			$data = rtrim($data, '/');
			$data = filter_var($data, FILTER_SANITIZE_URL);
			$data = explode('/', $data);
			return $data;
		}
	}

}