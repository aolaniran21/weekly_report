<?php

session_start();

    $host = 'localhost';
    $name = 'root';
    $pwd = '';
    $db = 'report';

    $conn = mysqli_connect($host, $name, $pwd, $db);

    if(!$conn){
        die("db connection failed. " .mysqli_error($conn));
    }
    
?>