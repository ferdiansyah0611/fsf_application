<?php

class Model extends Query
{
	private $where_key, $where_val;
	public function __construct(String $table, Array $fillable)
	{
		$this->table = $table;
		$this->fillable = $fillable;
		$this->data = new Query($table, $fillable);
	}
	/*method get*/
	public function get()
	{
		return $this;
	}
	public function fetch()
	{
		if($this->where_key == null && $this->where_val == null) {
			return $this->data->getter(['all']);
		}
		if($this->where_key !== null && $this->where_val !== null) {
			return $this->data->getter(['where', 'columns' => $this->where_key, 'value' => $this->where_val]);
		}
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
	public function where(String $key, String $val)
	{
		$this->where_key = $key;
		$this->where_val = $val;
		return $this;
	}
	public function delete()
	{
		return $this->data->deleting([$this->where_val]);
	}
	/*method post*/
	public function post()
	{
		return $this;
	}
	public function create(Array $data)
	{
		return $this->data->posted($data);
	}
	public function update(Array $data)
	{
		return $this->data->updating([$this->where_key, $this->where_val], $data);
	}
}