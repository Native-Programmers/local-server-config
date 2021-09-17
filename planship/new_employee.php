<?php
    $conn = require('hybrid.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $type = $_POST['type'];
    $exp = $_POST['exp'];
    $join_date = $_POST['join_date'];
    $city = $_POST['city'];
    $area= $_POST['area'];
    $street= $_POST['street'];
    $house= $_POST['house'];
    $education= $_POST['education'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO employee 
    (e_fname,e_lname,e_cnic,e_email,e_mobile,e_type,e_exp,e_joining_date,e_city,e_area,e_street,e_house,e_education,e_status)
    VALUES 
    ('$fname','$lname','$cnic','$email','$contact','$type','$exp','','$city','$area','$street','$house','$education','$status');";
    
    if ($conn->query($sql)){
        echo "Query successful";
    }else{
        echo "Query not successful";
        echo $conn->error;
    }
    $conn->close();
?>