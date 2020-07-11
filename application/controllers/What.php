<?php

class What extends Controller
{
	public function index()
	{
		$data['title'] = 'What page';
		$this->views('app', $data);
	}
}