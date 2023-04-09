<?php

$u_no=$_GET['u_no'];
$drive_card=$_GET['drive_card'];
$electricitybill_no=$_GET['electricitybill_no'];
$pancard_no=$_GET['pancard_no'];
$passport_id=$_GET['passport_id'];
$ration_id=$_GET['ration_id'];
$vid=$_GET['vid'];
 

//$fullname= $fname." ".$mname." ".$lname;

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "identity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usercard VALUES ('$u_no','$drive_card','$electricitybill_no','$pancard_no','$passport_id','$ration_id','$vid' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>