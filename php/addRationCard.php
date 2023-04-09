<?php

$cardno=$_GET['cardno'];
$holder_name=$_GET['holder_name'];
$gender=$_GET['gender'];
$age=$_GET['age'];
 $address=$_GET['address'];
$wardno=$_GET['wardno'];
$houseno=$_GET['houseno'];
$district=$_GET['district'];
$state=$_GET['state'];
$pincode=$_GET['pincode'];

 

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

$sql = "INSERT INTO ration VALUES ('$cardno','$holder_name','$gender','$age','$address','$wardno','$houseno','$district','$state','$pincode')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>