<?php
require_once '../config/config.php';

class Database
{
    public $host = HOST;
    public $user = USER;
    public $password = PASSWORD;
    public $database = DATABASE;

    public $link;
    public $error;

    public function __construct()
     {
        $this->dbConnect();
     }

    public function dbConnect()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8mb4";
            $this->link = new PDO($dsn, $this->user, $this->password);
            //PDO error mode for better error handling
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            //Handle conncetion errors
            die("Connection failed:" . $e->getMessage());
        }
    }
}
