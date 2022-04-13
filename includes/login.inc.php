<?php
include_once 'dbh.php';
include_once 'helper.php';
session_start();

$name = $_POST['uname'];
$pass = $_POST['psw'];
$_SESSION["uname"] = "$name";
$_SESSION["pwd"] = "$pwd";


if(isset($_POST["submit"])){
    echo "good good";

    $name= $_POST["uname"];
    $psw= $_POST["pws"];
}
else{
    header("location: ../pages/assiPage-grade.php");
}