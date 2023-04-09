<?php

$License_no=$_GET['License_no'];
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

$sql = "DELETE FROM drivecard WHERE License_no='".$License_no."'";

if ($conn->query($sql) === TRUE) 

include("DriveCardReportAll.php");



?>