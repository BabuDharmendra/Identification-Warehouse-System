<?php

$consumerno=$_GET['consumerno'];
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

$sql = "DELETE FROM electricity WHERE consumerno='".$consumerno."'";

if ($conn->query($sql) === TRUE) 

include("ElectricityCardReportAll.php");



?>