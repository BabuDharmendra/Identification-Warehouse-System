<?php

$u_no=$_GET['u_no'];
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

$sql = "DELETE FROM usercard WHERE u_no='".$u_no."'";

if ($conn->query($sql) === TRUE) 

include("userCardReportAll.php");



?>