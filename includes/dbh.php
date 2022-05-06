<?php

include_once('helper.php');

class DBH {
    private $dbServername = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "CMS";

    public function connect() {
        $conn = mysqli_connect($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);

        if(!$conn){
        die("connection failed" .mysqli_connect_error());
        }
        return $conn;
    }
}