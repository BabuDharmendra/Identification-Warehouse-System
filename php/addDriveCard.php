<?php

$License_no=$_GET['License_no'];
$First_Name=$_GET['First_Name'];
$Middle_Name=$_GET['Middle_Name'];
$Last_Name=$_GET['Last_Name'];
$Father_Name=$_GET['Father_Name'];
$City=$_GET['City'];
$State=$_GET['State'];
$Pincode=$_GET['Pincode'];
$Contact_No=$_GET['Contact_No'];
$Gender=$_GET['Gender'];
$Type=$_GET['Type']; 

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

$sql = "INSERT INTO drivecard VALUES ('$License_no','$First_Name','$Middle_Name','$Last_Name','$Father_Name','$City','$State','$Pincode','$Contact_No','$Gender','$Type')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>