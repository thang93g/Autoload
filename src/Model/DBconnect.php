<?php


namespace App\Model;
use PDO;

class DBconnect {

    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=School;charset=utf8';
        $this->username='root';
        $this->password='Buoica1as';
    }
    function connectDB(){
        $connectDB = NULL;
        $connectDB = new PDO($this->dsn,$this->username,$this->password);
        return $connectDB;
    }
}