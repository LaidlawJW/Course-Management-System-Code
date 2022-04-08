<?php
if(isset($_POST["submitInfoButton"])){
    echo "good good";

    $name= $_POST["uname"];
    $psw= $_POST["pws"];
    $repeatPws= $_POST["repeatPsw"];
    


}
else{
    header("location: ../login.php");
}