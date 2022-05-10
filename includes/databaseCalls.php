<?php
session_start();
require_once("dbh.php");

class DatabaseCalls extends DBH {

public function getClassesByUserID($userID) {
    try {
        $conn = $this->connect();

        $SQLClass = "SELECT classes.ClassName
        FROM users
        LEFT JOIN Classes
        on users.UserID = Classes.UserID
        WHERE username = '$userID'";


        $result2 = mysqli_query($conn, $SQLClass);
        return mysqli_fetch_all($result2, MYSQLI_ASSOC);
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

public function getAssignmentsByUserID($userID) {
    $conn = $this->connect();
    
    try {
        $sql = 
        "SELECT * FROM assignments LEFT JOIN assigns on assignments.AssignmentID = assigns.AssgnmentID LEFT JOIN users ON users.UserID = assigns.UserID LEFT JOIN Classes ON Classes.ClassID = assignments.ClassID WHERE users.UserID = $userID;";

        $result2 = mysqli_query($conn, $sql);
        return mysqli_fetch_all($result2, MYSQLI_ASSOC);
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

public function  getAssignmentsByClassId($classID) {
    $conn = $this->connect();
    
    try {
        $sql = 
        "SELECT * FROM assignments LEFT JOIN assigns on assignments.AssignmentID = assigns.AssgnmentID LEFT JOIN users ON users.UserID = assigns.UserID LEFT JOIN Classes ON Classes.ClassID = assignments.ClassID WHERE Classes.ClassID = $classID;";

        $result2 = mysqli_query($conn, $sql);
        return mysqli_fetch_all($result2, MYSQLI_ASSOC);
    } catch (Exception $e) {
        die($e->getMessage());
    }  
}

public function uploadPfp($pfp,) {
    $conn = $this->connect();
    $userID = $_SESSION['UserID'];
    
    $sql = "UPDATE users SET linkToPfp='../data/users/pfp/bigBird.webp' WHERE UserID = $userID;";
}

}