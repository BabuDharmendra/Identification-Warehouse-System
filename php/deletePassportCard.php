<?php

$pid=$_GET['pid'];
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

$sql = "DELETE FROM passport WHERE pid='".$pid."'";

if ($conn->query($sql) === TRUE) 

include("PassportCardReportAll.php");



?>