<?php

class Home extends Controller
{
	public function index()
	{
		$data['title'] = 'title';
		$this->load()->views('app', $data);
	}
}