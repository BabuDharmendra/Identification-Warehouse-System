<?php

$pan_card_no=$_GET['pan_card_no'];
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

$sql = "DELETE FROM userpancard WHERE pan_card_no='".$pan_card_no."'";

if ($conn->query($sql) === TRUE) 

include("pancardReportAll.php");



?>