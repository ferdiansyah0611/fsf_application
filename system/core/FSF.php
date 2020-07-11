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
		// default url
		if($this->URLparse() == null) {
			// controller
			require DIR_URL . '/application/controllers/' . $this->controller . '.php';
			$this->controller = new $this->controller;
			$this->controller->index();
		}
		else {
			$string = explode('/', $this->URLparse()['url']);
			/*var_dump($string);*/
			// controller
			// only controller not methods {index url /}
			if(!isset($string[1])) {
					require DIR_URL . '/application/controllers/' . $string[0] . '.php';
					if(method_exists($this->controller = new $string[0], 'index')) {
						/*echo 'true';*/
						call_user_func(array($this->controller, 'index'));
					} else {
      					throw new Exception('Methods not founds');
					}

			// controller & methods
			} else {
				require DIR_URL . '/application/controllers/' . $string[0] . '.php';
				$this->controller = new $string[0];
				if($string[1] !== null) {
					if(method_exists($this->controller, $string[1])) {
						/*echo 'have';*/
						call_user_func(array($this->controller, $string[1]));
					} else {
      					throw new Exception('Methods not founds');
					}
				}
			}
		}
	}

	public function URLparse()
	{
		if(isset($_GET)){
			return $_GET;
		}
	}

}