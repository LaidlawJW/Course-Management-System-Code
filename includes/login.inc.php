<?php
if(isset($_POST["submit"])){
    echo "good good";

    $name= $_POST["uname"];
    $psw= $_POST["pws"];
    $repeatPws= $_POST["repeatPsw"];
}
else{
    header("location: ../login.php");
}