<?php

class What extends Controller
{
	public function __construct()
	{
		$this->models('example');
		$this->loaded = new Example;
	}
	public function index()
	{
		var_dump($this->loaded->all());
		$data['title'] = 'What page';
		$this->views('app', $data);
	}
}