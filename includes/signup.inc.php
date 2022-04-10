<?php
include_once 'includes/dbh.php';

$name = $_POST['uname'];
$pass = $_POST['psw'];
$pass2 = $_POST['repeatPsw'];


$sql = "INSERT INTO main( '$name', '$pass', '$pass2');";

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";




mysqli_query($conn,$sql);

header("Location: ../login.php");