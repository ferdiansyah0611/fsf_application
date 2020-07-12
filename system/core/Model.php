<?php

class Model extends Query
{
	public function __construct($table)
	{
		$this->table = $table;
		$this->data = new Query($table);
	}
	public function get()
	{
		return $this->data->getter();
	}
}