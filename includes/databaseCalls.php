<?php
session_start();
require_once("dbh.php");

class DatabaseCalls extends DBH {

public function getClasses() {
    $conn = $this->connect();

    $SQLClass = "SELECT classes.ClassName
    FROM users
    LEFT JOIN Classes
    on users.UserID = Classes.UserID
    WHERE username = 'Colten Cisler'";

    $result2 = mysqli_query($conn, $SQLClass);
    return mysqli_fetch_all($result2, MYSQLI_ASSOC);
}

public function getAssignmentsByUserID($userID) {
    $conn = $this->connect();

    $sql = "SELECT * FROM assigns WHERE user_id = $userID";
    $result2 = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result2, MYSQLI_ASSOC);
}

public function uploadPfp($pfp,) {
    $conn = $this->connect();
    $userID = $_SESSION['UserID'];
    
    $sql = "UPDATE users SET linkToPfp='../data/users/pfp/bigBird.webp' WHERE UserID = $userID;";
}

}