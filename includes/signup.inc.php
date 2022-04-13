<?php
include_once 'includes/dbh.php';
include_once 'includes/helper.php';
console_log(['ass']);

$name = $_POST['uname'];
$pass = $_POST['psw'];
$pass2 = $_POST['repeatPsw'];

if ($pass != $pass2) header("Location: ../login.php?error=pwdMatchError");

$sql = "INSERT INTO main (name, password) VALUES ('$name', '$pass', '$pass2');";

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";




mysqli_query($conn,$sql);

header("Location: ../login.php");