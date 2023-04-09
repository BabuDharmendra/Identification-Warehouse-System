<?php
$address=$_GET['address'];
$birthdate=$_GET['birthdate'];
$city=$_GET['city'];
$country=$_GET['country'];
$dist=$_GET['dist'];
$email=$_GET['email'];
$employee=$_GET['employee'];
$fathername=$_GET['fathername'];
$gender=$_GET['gender'];
$Identimarks=$_GET['Identimarks'];
$martial=$_GET['martial'];
$mobile=$_GET['mobile'];
$mothername=$_GET['mothername'];
$nativeplace=$_GET['nativeplace'];
$pancard=$_GET['pancard'];
$pid=$_GET['pid'];
$pincode=$_GET['pincode'];
$qualification=$_GET['qualification'];
$state=$_GET['state'];
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

$sql = "update  passport set address='".$address."',birthdate='".$birthdate."',city='".$city."',country='".$country."',dist='".$dist."',email='".$email."',employee='".$employee."',fathername='".$fathername."',gender='".$gender."',Identimarks='".$Identimarks."',martial='".$martial."',mobile='".$mobile."',mothername='".$mothername."',nativeplace='".$nativeplace."',pancard='".$pancard."',pid='".$pid."',pincode='".$pincode."',qualification='".$qualification."',state='".$state."',vid='".$vid."' where pid='".$pid."'";
$conn->query($sql);

include("PassportCardReportAll.php");
 

?>