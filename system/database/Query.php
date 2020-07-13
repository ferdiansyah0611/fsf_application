<?php

class Query
{
	public function __construct($table, $fillable)
    {
        $host = DB_HOST;
        $dbname = DB_NAME;
        $username = DB_USER;
        $password = DB_PASS;
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->name = join(',', $fillable);
        $this->fillable = join(',:', $fillable);
        $this->fill = $fillable;
        $this->table_name = $table;
    }
    public function getter($data = [])
    {
        if($data[0] == 'all') {
        	$query = $this->db->prepare("SELECT id,{$this->name},created_at,updated_at FROM {$this->table_name}");
        }
        if($data[0] == 'limit') {
            $query = $this->db->prepare("SELECT id,{$this->name},created_at,updated_at FROM {$this->table_name} limit {$data[1]}");
        }
        if($data[0] == 'latest') {
            $query = $this->db->prepare("SELECT id,{$this->name},created_at,updated_at FROM {$this->table_name} ORDER BY created_at ASC");
        }
        if($data[0] == 'find') {
            $query = $this->db->prepare("SELECT id,{$this->name},created_at,updated_at FROM {$this->table_name} WHERE id=$data[1]");
        }
        if($data[0] == 'where') {
            $query = $this->db->prepare("SELECT id,{$this->name},created_at,updated_at FROM {$this->table_name} WHERE {$data['columns']}={$data['value']}");
        }
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function posted($data = [])
    {
        $inValues = ':' . $this->fillable;
        $db = $this->db->prepare("INSERT INTO {$this->table_name} ({$this->name}) VALUES ($inValues)");
        $db->execute($data);
        return $db->rowCount();
    }
    public function updating($where = [], $data = [])
    {
        $set = join('=?,', $this->fill) . '=?';
        $db = $this->db->prepare("UPDATE {$this->table_name} SET {$set} WHERE $where[0]=$where[1]");
        for ($i=1; $i < count($data); $i++) {
            $db->BindParam($i,$data[$i]);
        }
        $db->execute();
        return $db->rowCount();
    }
    public function deleting($data = [])
    {
        $db = $this->db->prepare("DELETE FROM {$this->table_name} WHERE id=$data[0]");
        $db->execute();
        return $db->rowCount();
    }
}