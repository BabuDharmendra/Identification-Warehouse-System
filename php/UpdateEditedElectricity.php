<?php

$consumerno=$_GET['consumerno'];
$consumername=$_GET['consumername'];
$dob=$_GET['dob'];
$gender=$_GET['gender'];
$fhname=$_GET['fhname'];
$houseno=$_GET['houseno'];
$contact=$_GET['contact'];
$occupation=$_GET['occupation'];
$capacity=$_GET['capacity'];
$address=$_GET['address'];
$district=$_GET['district'];
$state=$_GET['state'];
$pin=$_GET['pin'];



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

$sql = "update  electricity set  consumername='".$consumername."',dob='".$dob."',gender='".$gender."',fhname='".$fhname."',houseno='".$houseno."',contact='".$contact."',occupation='".$occupation."',capacity='".$capacity."',address='".$address."',district='".$district."',state='".$state."',pin='".$pin."' where consumerno='".$consumerno."'";
$conn->query($sql);

include("ElectricityCardReportAll.php");
 

?>