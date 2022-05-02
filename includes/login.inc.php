<?php
include_once 'dbh.php';
include_once 'helper.php';

$name = $_POST['uname'];
$pass = $_POST['psw'];

if(isset($_POST["submit"])){
    echo "good good";
    echo $echo;

    try {
        $SQLUser =  "SELECT * FROM main WHERE username = '$name';";
        $result = mysqli_query($conn, $SQLUser);
        $rows = mysqli_fetch_assoc($result);
    } catch(Exception $e) {
        die($e->getMessage());
    }

    $password = $rows['password'];

    if($pass == $password){
        session_start();
        $_SESSION["UserID"] = "$UserID";
        $_SESSION["uname"] = "$name";
    
        header("location: ../pages/Dashboard_temp.php");
        exit();
    }
    else{
        console_log('ahhhhh');

        echo" oh no your web dev is bad";
        //header("location: /signout.inc.php");
    }
}
