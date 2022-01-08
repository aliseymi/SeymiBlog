<?php

namespace App\Core;

use PDO;
use PDOException;
use SimpleCrud\Database as DB;

class BaseModel
{
    protected $host;
    protected $dbname;
    protected $user;
    protected $password;
    protected $table;

    protected $db;

    public function __construct()
    {
        $this->dbname = config('database.dbname');
        $this->host = config('database.host');
        $this->user = config('database.user');
        $this->password = config('database.password');

        try {

            $pdo = new PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->user, $this->password);
            $pdo->exec('set names utf8;');

            $this->db = new DB($pdo);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function insert(array $data)
    {
        return $this->db->{$this->table}->insert($data)->get();
    }

    public function select(string $column = null, string|int $value = null)
    {
        if(!is_null($column) && !is_null($value))
            return $this->db->{$this->table}->select()->one()->where("$column = ", $value)->get();

        return $this->db->{$this->table}->select()->get();
    }

    public function update(int $id, array $data)
    {
        return $this->db->{$this->table}[$id] = $data;
    }

    public function delete(int $id)
    {
        return $this->db->{$this->table}->delete()->where('id = ', $id)->get();
    }
}
