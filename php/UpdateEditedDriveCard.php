<?php

$License_no=$_GET['License_no'];
$First_Name=$_GET['First_Name'];
$Middle_Name=$_GET['Middle_Name'];
$Last_Name=$_GET['Last_Name'];
$Father_Name=$_GET['Father_Name'];
$City=$_GET['City'];
$State=$_GET['State'];
$Pincode=$_GET['Pincode'];
$Contact_No=$_GET['Contact_No'];
$Gender=$_GET['Gender'];
$Type=$_GET['Type'];

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

$sql = "update  drivecard set  First_Name='".$First_Name."',Middle_Name='".$Middle_Name."',Last_Name='".$Last_Name."',Father_Name='".$Father_Name."',City='".$City."',State='".$State."',Pincode='".$Pincode."',Contact_No='".$Contact_No."',Gender='".$Gender."',Type='".$Type."' where License_no='".$License_no."'";
$conn->query($sql);

include("DriveCardReportAll.php");
 

?>