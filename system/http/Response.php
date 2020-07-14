<?php 
namespace FSF\Http;

class Response
{
	public function redirect()
	{

	}
	public function json($data, INT $status)
	{
		return json_encode($data);
	}
}