<?php
$conn = require('hybrid.php');
$sql = "SELECT orders.e_id,o_id,c_fname,c_lname,e_lname,e_fname,o_type,o_rating,o_charges,date,o_starting_date,
o_ending_date from orders JOIN employee on orders.e_id = employee.e_id
JOIN client on orders.c_id = client.c_id ORDER BY o_id ";
 $db_data = array();

 $result = $conn->query($sql);
 if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
         $db_data[] = $row;
     }
     echo json_encode($db_data);
 }else{
     echo "error";
 }
 $conn->close();
 return;

?>