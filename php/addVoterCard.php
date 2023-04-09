<?php

$vid=$_GET['vid'];
$fname=$_GET['fname'];
$mname=$_GET['mname'];
$lname=$_GET['lname'];
$fatherName=$_GET['fatherName'];
$City=$_GET['City'];
$State=$_GET['State'];
$contact=$_GET['Contact'];
$gender=$_GET['gender'];

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

$sql = "INSERT INTO votercard 
VALUES ('$vid','$fname','$mname','$lname','$fatherName','$City','$State','$contact','$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>