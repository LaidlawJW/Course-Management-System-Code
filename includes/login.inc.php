<?php
include_once 'dbh.php';
include_once 'helper.php';
session_start();

$name = $_POST['uname'];
$pass = $_POST['psw'];
$_SESSION["uname"] = "$name";
$_SESSION["pwd"] = "$pwd";

console_log('bet');



if(isset($_POST["submit"])){
    echo "good good";

    $name = $_POST["uname"];
    $psw = $_POST["pws"];

    $sql ="SELECT * FROM 'main' WHERE 'name' = $name";

    mysqli_query($conn, $sql);

    
    
    header("location: ../pages/assiPage-grade.php");

}
else{
    echo" oh no your web dev is shit";
}