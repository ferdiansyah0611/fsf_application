<?php 
class Controller
{
	public function views($file, $data = [])
	{
		require_once './application/views/' . $file . '.fsf.php';
	}
}