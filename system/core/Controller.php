<?php

class Controller
{
	public function load()
	{
		return $this;
	}
	public function views($file, $data = [])
	{
		require_once './application/views/' . $file . '.fsf.php';
	}
	public function models($name)
	{
		require_once DIR_URL . '/application/models/' . $name . '.php';
		return new $name;
	}
}