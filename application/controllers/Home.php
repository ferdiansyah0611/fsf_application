<?php

class Home extends Controller
{
	public function index()
	{
		$data['title'] = 'title';
		$this->views('app', $data);
	}
}