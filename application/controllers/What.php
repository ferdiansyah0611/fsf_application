<?php

class What extends Controller
{
	public function __construct()
	{
		$this->models('example');
		$this->loaded = new Example;
	}
	public function index($one = '', $two = '')
	{
		/*inser data*/
		var_dump($this->loaded->find(5));
		$data['title'] = 'What page' . $one;
		$this->views('app', $data);
	}
}