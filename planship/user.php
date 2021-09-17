<?php
    $conn = require('hybrid.php');
    $id = $_POST['c_id'];
    $sql = "SELECT c_fname,c_lname from client where c_id = '$id';";
    $result =$conn->query($sql);
    if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $db_data[] = $row;
        echo json_encode($db_data);
    }else{
        echo json_encode( "New User");
    }
    $conn->close();
?>