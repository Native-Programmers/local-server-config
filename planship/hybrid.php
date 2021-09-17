<?php
   
    $servername = "localhost";
 
    // Give your username and password
    $username = "user";
    $password = "@planship1234";
 
   // Give your Database name
    $dbname = "ps_db";
 
     
    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check Connection
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
        echo "Connection failed";
        return;
    }
        return $conn;
 
?>