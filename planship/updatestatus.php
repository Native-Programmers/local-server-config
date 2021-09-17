<?php
    $conn = require('hybrid.php');
    $status = $_POST["status"];
    $id = $_POST["id"];
    $sql = "UPDATE employee SET e_status = '$status' where e_id = '$id';";
    
    if ($conn->query($sql)){
        echo "Successful";
    }
    else{
        echo $conn->error;
    }

?>