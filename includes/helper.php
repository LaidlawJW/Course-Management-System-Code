<?php

function console_log($data) {
echo "<script>";
echo 'console.log('.json_encode($data).')';
echo "</script>";
}

function query($conn, $stmt) {
    $results = mysqli_query($conn,$stmt);
    $row = mysqli_fetch_assoc($results);
    // while($row = mysqli_fetch_assoc($results)){
    return $row['name'];
    // }
}

// Sessions and Session variables