<?php
include_once 'dbh.php';
include_once 'helper.php';

$name = $_POST['uname'];
$pass = $_POST['psw'];

if(isset($_POST["submit"])){
    $DBH = new DBH;
    $conn = $DBH->connect();

    try {
        $SQLUser =  "SELECT * FROM users WHERE username = '$name';";
        $result = mysqli_query($conn, $SQLUser);
        $rows = mysqli_fetch_assoc($result);
    } catch(Exception $e) {
        die($e->getMessage());
    }
    
    $password = $rows['password'];

    if($pass == $password){
        session_start();
        $_SESSION["UserID"] = $rows['UserID'];
        $_SESSION["uname"] = "$name";
        $_SESSION['pfp'] = $rows['linkToPfp'];
        $_SESSION['email'] = $rows['email'];
        $_SESSION['major'] = $rows['major'];
        $_SESSION['type'] = $rows['type'];
        






        header("location: ../pages/Dashboard_temp.php");
        exit();
    }
    else{
        console_log('ahhhhh');

        echo" oh no your userid or password is bad";
        //header("location: /signout.inc.php");
    }
}
