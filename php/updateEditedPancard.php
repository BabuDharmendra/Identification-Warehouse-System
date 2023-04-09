<?php

$pan_card_no=$_GET['pan_card_no'];
$first_name=$_GET['first_name'];
$middil_name=$_GET['middil_name'];
$last_name=$_GET['last_name'];
$father_name=$_GET['father_name'];
$city=$_GET['city'];
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

$sql = "update  userpancard set  first_name='".$first_name."',middil_name='".$middil_name."',last_name='".$last_name."',father_name='".$father_name."',city='".$city."',State='".$state."',contect='".$contect."',gender='".$gender."' where pan_card_no='".$pan_card_no."'";
$conn->query($sql);

include("PancardReportAll.php");
 

?>