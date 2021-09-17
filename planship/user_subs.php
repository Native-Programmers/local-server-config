<?php
    $conn = require('hybrid.php');
    $sql = "SELECT client.c_id,c_fname,c_lname,p_type,date,expiry_date from packages_sub 
    JOIN client on packages_sub.c_id = client.c_id 
    JOIN packages on packages_sub.p_id = packages.p_id;";
    
    $db_data = array();
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $db_data[] = $row;
        }
        echo json_encode($db_data);
    }

    else{
        echo "error";
    }
    $conn->close();

    return;

?>