<?php

class Query
{
	public function __construct($table)
    {
        $host = DB_HOST;
        $dbname = DB_NAME;
        $username = DB_USER;
        $password = DB_PASS;
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->table_name = $table;
    }
    public function getter()
    {
        $table = $this->table_name;
    	$query = $this->db->prepare("SELECT * FROM {$table}");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}