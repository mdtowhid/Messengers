<?php
class DB{
    protected $conn;
    public function __construct()
    {
        $servername = "localhost";
        $userName = "root";
        $password = "";
        $dbname = "messenger_db";

        $this->conn = new mysqli($servername, $userName, $password, $dbname);
    }
}