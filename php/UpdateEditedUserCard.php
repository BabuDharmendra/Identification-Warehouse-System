<?php
$u_no=$_GET['u_no'];  
$drive_card=$_GET['drive_card'];
$electricitybill_no=$_GET['electricitybill_no'];
$pancard_no=$_GET['pancard_no'];
$passport_id=$_GET['passport_id'];
$ration_id=$_GET['ration_id'];
$vid=$_GET['vid'];
 
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

$sql = "update  usercard set  u_no='".$u_no."',drive_card='".$drive_card."',electricitybill_no='".$electricitybill_no."',pancard_no='".$pancard_no."',passport_id='".$passport_id."',ration_id='".$ration_id."'  where u_no='".$u_no."'";$conn->query($sql);
                

include("userCardReportAll.php");
 

?>