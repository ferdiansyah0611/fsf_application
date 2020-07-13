<?php
class Example extends Model
{
	protected $table = 'fs_users';

	protected $fillable = ['name','email', 'password'];

	public function __construct()
	{
		parent::__construct($this->table, $this->fillable);
	}
	/*get all data*/
	public function all()
	{
		return $this->get()->fetchAll();
	}
	/*get all data with limit*/
	public function limited()
	{
		return $this->get()->limit(5);
	}
	/*get all data with latest*/
	public function latested()
	{
		return $this->get()->latest();
	}
	/*find data with id*/
	public function find($data)
	{
		return $this->get()->finds($data);
	}
	/*insert data*/
	public function created()
	{
		return $this->post()->create([
			':name' => 'ferdi',
			':email' => 'ferdi@gmail.com',
			':password' => '12345ferdi'
		]);
	}
}