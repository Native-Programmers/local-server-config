<?php
    $conn = require('hybrid.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $area= $_POST['area'];
    $street= $_POST['street'];
    $house= $_POST['house'];
    $date = $_POST['date_of_reg'];
    $coordinates= $_POST['coordinates'];
    $date = date("Y-m-d",strtotime($date));
    echo $date;
    // $sql = "INSERT INTO client (c_fname, c_lname, c_cnic, c_email, c_mobile, c_city, c_area, c_street, c_house, c_date_of_reg,c_coordinates)
    // VALUES ('$fname','$lname','$cnic','$email','$contact','$city','$area','$street','$house','$date','$coordinates');";
    
    // if ($conn->query($sql)){

    //     echo json_encode($conn-> insert_id);
    // }else{
    //     echo "Query not successful";
    //     echo $conn->error;
    // }
    $conn->close();
?>