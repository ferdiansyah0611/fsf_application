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
	/*where data*/
	public function whereData($key, $value)
	{
		return $this->get()->where($key, $value)->fetch();
	}
	/*delete data*/
	public function deleted($key, $value)
	{
		return $this->get()->where($key, $value)->delete();
	}
	/*updated data*/
	public function updated($data)
	{
		return $this->post()->where('id', '5')->update([null, 'ferdi', 'asu@gmail.com', '12345ferdi']);
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