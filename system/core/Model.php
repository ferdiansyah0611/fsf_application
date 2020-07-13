<?php

class Model extends Query
{
	public function __construct(String $table, Array $fillable)
	{
		$this->table = $table;
		$this->fillable = $fillable;
		$this->data = new Query($table, $fillable);
	}
	public function get()
	{
		return $this;
	}
	public function post()
	{
		return $this;
	}
	public function create(Array $data)
	{
		return $this->data->posted($data);
	}
	public function fetchAll()
	{
		return $this->data->getter(['all']);
	}
	public function limit(Int $data)
	{
		return $this->data->getter(['limit', $data]);
	}
	public function finds(Int $data)
	{
		return $this->data->getter(['find', $data]);
	}
	public function latest()
	{
		return $this->data->getter(['latest']);
	}
}