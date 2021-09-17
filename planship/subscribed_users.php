<?php
    $conn = require('hybrid.php');
    $id = $_POST['c_id'];
    $sql = "SELECT * FROM packages_sub 
    JOIN client on client.c_id = packages_sub.c_id
    JOIN packages on packages_sub.p_id = packages.p_id 
    WHERE packages_sub.c_id = '$id' 
    ORDER BY ps_id;";
    $result =$conn->query($sql);

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $db_data[] = $row;
        }
        echo json_encode($db_data);
    }else{
        echo json_encode("New User");
    }
    $conn->close();
?>