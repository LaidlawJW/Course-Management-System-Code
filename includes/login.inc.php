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

    $SQLPasswordQuery = "SELECT pwd FROM main WHERE UserID = $name;";
    $SQLPassword = mysqli_query($conn,$SQLPasswordQuery, MYSQLI_USE_RESULT);

    $SQLUserID =  "SELECT UserID FROM main WHERE password = $pass;";

    

    echo $SQLPassword;
    // echo $SQLUserID;
    // echo $name;
    // echo $pass;
    

    if($name = $SQLUserID && $pass = $SQLPassword){
        header("location: ../pages/Dashboard_temp.php");


    }
    //mysqli_query($conn, $sql);


}
else{
    echo" oh no your web dev is bad";
}