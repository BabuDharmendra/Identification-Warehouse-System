<?php

$vid=$_GET['vid'];
$fname=$_GET['fname'];
$mname=$_GET['mname'];
$lname=$_GET['lname'];
$fatherName=$_GET['fatherName'];
$City=$_GET['City'];
$State=$_GET['State'];
$Contect=$_GET['Contect'];
$gender=$_GET['Gender'];

//$fullname= $fname." ".$mname." ".$lname;

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

$sql = "update  votercard set FirstName='".$fname."',MiddleName='".$mname."',LastName='".$lname."',fatherName='".$fatherName."',City='".$City."',State='".$State."',Contect='".$Contect."',Gender='".$gender."' where vid='".$vid."'";
$conn->query($sql);

include("VoterCardReportAll.php");
 

?>