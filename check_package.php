<?php
    $conn = require('hybrid.php');
    $id = $_POST['c_id'];
    $sql = "SELECT * FROM packages_sub 
    JOIN client on client.c_id = packages_sub.c_id
    JOIN packages on packages_sub.p_id = packages.p_id 
    WHERE packages_sub.c_id = '$id' AND packages_sub.expiry_date >= CURDATE()
    ORDER BY expiry_date desc;";
    $result =$conn->query($sql);
    if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $db_data[] = $row;
        echo json_encode($db_data);
    }else{
        echo json_encode(true);
    }
    $conn->close();
?>