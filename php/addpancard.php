<?php

$pan_card_no=$_GET['pan_card_no'];
$first_name=$_GET['first_name'];
$middil_name=$_GET['middil_name'];
$last_name=$_GET['last_name'];
$father_name=$_GET['father_name'];
$city	=$_GET['city'];
$state=$_GET['state'];
$contect=$_GET['contect'];
$gender=$_GET['gender'];
 

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

$sql = "INSERT INTO userpancard VALUES ('$pan_card_no','$first_name	','$middil_name','$last_name','$father_name','$city','$state','$contect','$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>