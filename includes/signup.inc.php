<?php
include_once 'dbh.php';
include_once 'helper.php';

$name = $_POST['uname'];
$pass = $_POST['psw'];
$pass2 = $_POST['repeatPsw'];
$email = $_POST['email'];
$type = $_POST['type'];

if ($pass != $pass2) header("location: ../pages/login.php?error=pwdMatchError");

$sql = "INSERT INTO main (name, email, password, type) VALUES ('$name', '$email', '$pass', '$type');";

mysqli_query($conn,$sql);

header("location: ../pages/login.php?error=none");