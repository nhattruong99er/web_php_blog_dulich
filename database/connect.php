<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="travel";
    $conn= mysqli_connect($host,$user, $password,$database);
    if(mysqli_connect_errno()){
        echo"connection_fail:".mysqli_connect_error();
        exit;
    }
?>