<?php

$Uid=$_GET['Uid'];
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

$sql = "DELETE FROM uid WHERE Uid='".$Uid."'";

if ($conn->query($sql) === TRUE) 

include("UidReportAll.php");



?>