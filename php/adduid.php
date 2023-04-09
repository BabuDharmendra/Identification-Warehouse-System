<?php

$Uid=$_GET['Uid'];
$Drive_card=$_GET['Drive_card'];
$ElectricityBill_No=$_GET['ElectricityBill_No'];
$Pancard_No=$_GET['Pancard_No'];
$Passport_Id=$_GET['Passport_Id'];
$Ration_Id=$_GET['Ration_Id'];
$vid=$_GET['vid'];  

 

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

$sql = "INSERT INTO uid VALUES ('$Uid','$Drive_card	','$ElectricityBill_No','$Pancard_No','$Passport_Id','$Ration_Id','$vid' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>