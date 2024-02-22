<?php
    $server="localhost";
    $username="root";
    $pass="";
    $db="ecom";
    $conn = new mysqli($server,$username,$pass,$db);
    if ($conn->connect_error) {
        die("Cannot connect to db: " . $conn->connect_error);
    } else {
    }  
?>