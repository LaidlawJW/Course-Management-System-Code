<?php

include_once('helper.php');

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "CMS";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("connection failed" .mysqli_connect_error());
}