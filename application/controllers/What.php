<?php

class What extends Controller
{
	public function __construct()
	{
		$this->example = $this->load()->models('example');
	}
	public function index($one = '2', $two = '')
	{
		var_dump($this->example->whereData('id', $one));
		// var_dump($this->loaded->find(5));
		// var_dump($this->loaded->updated(5));
		$data['title'] = 'What page' . $one;
		$this->load()->views('app', $data);
	}
}