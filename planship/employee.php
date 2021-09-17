<?php
$conn = require('hybrid.php');
$sql = "SELECT * from employee ORDER BY e_id ";
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