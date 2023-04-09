<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body class="bg-success">



<?php
// declare global variable for all Id's
include("../UI/GlobalSearch.html");
$anyid=$_GET["anyid"];

$drive_id="";
$elec_id="";
$pan_id="";
$pass_id="";
$ration_id="";
$voter_id="";


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
 
  // Select all UId from UID table and put in variables like PANCARD_No,Voter_CARD 
  $sql = "SELECT * from usercard where u_no='".$anyid."' or drive_card='".$anyid."' or electricitybill_no='".$anyid."' or pancard_no='".$anyid."' or passport_id='".$anyid."' or 	ration_id='".$anyid."' or vid='".$anyid."'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $drive_id=$row["drive_card"];
      $elec_id=$row["electricitybill_no"];
      $pan_id=$row["pancard_no"];
      $pass_id=$row["passport_id"];
      $ration_id=$row["ration_id"];
      $voter_id=$row["vid"];
    }
  } else {
    echo "0 results";
  }
  //echo $drive_id."--".$elec_id."--".$pan_id."---".$pass_id."---".$ration_id."--".$voter_id;



?>
<br><br>
<div class="container bg-primary  container-hover">
  <h2>Voter Card List</h2>
  <p>Voter Information is Here:-</p>            
  <table class="table table-hover bg-white ">
    <thead>
      <tr>
        <th>Voter ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>City</th>
        <th>State</th>
        <th>Contact</th>
        <th>Gender</th>

      </tr>
    </thead>
    <tbody>
      <br><br>
        <?php
  echo "Details of Voter ID=".$voter_id;
    $sql = "SELECT * from votercard where vid='".$voter_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["vid"]. " </td><td>" . $row["FirstName"]. " </td><td>" . $row["MiddleName"]. "</td><td>".$row["LastName"]."</td><td>".$row["fatherName"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Contect"]."</td><td>".$row["Gender"]."</td></tr>";
  }
} else {
  echo "0 results";
}
?>

</tbody>
</table>
</div>
<br><br>





<div class="container bg-danger ,rounded">
  <h2>PAN Card List</h2>
  <p>PAN CARD Information is Here:-</p>            
  <table class="table table-hover bg-white">
    <thead>
      <tr>
        <th>PAN ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>City</th>
        <th>State</th>
        <th>Contact</th>
        <th>Gender</th>

      </tr>
    </thead>
    <tbody>
        <?php
echo "Details of Pan Card ID=".$pan_id;
    $sql = "SELECT * from userpancard where pan_card_no='".$pan_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["pan_card_no"]. " </td><td>" . $row["first_name"]. " </td><td>" . $row["middil_name"]. "</td><td>".$row["last_name"]."</td><td>".$row["father_name"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["contect"]."</td><td>".$row["gender"]."</td></tr>";
  }
} else {
  echo "0 results";
}
?>

</tbody>
</table>
</div>
<br><br>
<!-- Drive Card Implementation-->

<div class="container bg-dark  text-white">
  <h2>Drive Card List</h2>
  <p>Drive CARD Information is Here:-</p>            
  <table class="table table-hover  bg-white">
    <thead>
      <tr>
        <th>License_no</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>City</th>
        <th>State</th>
        <th>Pin Code</th>
        <th>Contact</th>
        <th>Gender</th>
        <th>Type</th>

      </tr>
    </thead>
    <tbody>
      <br><br>
        <?php
echo "Details of Drive ID=".$drive_id;
    $sql = "SELECT * from drivecard where License_no='".$drive_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["License_no"]. " </td><td>" . $row["First_Name"]. " </td><td>" . $row["Middle_Name"]. "</td><td>".$row["Last_Name"]."</td><td>".$row["Father_Name"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Pincode"]."</td><td>".$row["Contact_No"]."</td><td>".$row["Gender"]."</td><td>".$row["Type"]."</td></tr>";
  }
} else {
  echo "0 results";
}
?>

</tbody>
</table>
</div>
<br><br>

<!-- Electricity Bill Details -->

<div class="container bg-warning table table-hover  bg-sucess">
  <h2>Electricity Bill Details</h2>
  <p>Electricity Bill Information is Here:-</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Consumer No.</th>
        <th>Consumer Name</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Father Name</th>
        <th>House No.</th>
        <th>Contact</th>
        <th>Occupation</th>
        <th>Capacity</th>
        <th>Address</th>
        <th>District</th>
        <th>State</th>
        <th>Pin Code</th>

      </tr>
    </thead>
    <tbody>
        <?php
echo "Details of Electricity Bill=".$elec_id;
    $sql = "SELECT * from electricity where consumerno='".$elec_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["consumerno"]. " </td><td>" . $row["consumername"]. " </td><td>" . $row["dob"]. "</td><td>".$row["gender"]."</td><td>".$row["fhname"]."</td><td>".$row["houseno"]."</td><td>".$row["contact"]."</td><td>".$row["occupation"]."</td><td>".$row["capacity"]."</td><td>".$row["address"]."</td><td>".$row["district"]."</td><td>".$row["state"]."</td><td>".$row["pin"]."</td></tr>";
  }
} else {
  echo "0 results";
}
?>

</tbody>
</table>
</div>


<!-- passport Details -->


<br><br>

<div class="container    bg-primary" >
  <h2>Passport Details</h2>
  <p>Passport Information is Here:-</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Passport ID</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Birth Date</th>
        <th>Gender</th>
        <th>Native Place</th>
        <th>Employee</th>
        
        <th>Martial Status</th>
        <th>Qualification</th>
        <th>Mobile</th>
        <th>Identification Marks</th>
        <th>Address	</th>

        <th>City</th>
        <th>District</th>
        <th>State</th>
        <th>Country</th>
        <th>Pincode</th>
        <th>Email</th>
        <th>Voter Id</th>
        <th>PanCard_No</th>
        <th>Passport Valid	</th>

      </tr>
    </thead>
    <tbody>
        <?php
echo "Details of Passport=".$pass_id;
    $sql = "SELECT * from passport where pid='".$pass_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["pid"]. " </td><td>" . $row["fathername"]. " </td><td>" . $row["mothername"]. "</td><td>".$row["birthdate"]."</td><td>".$row["gender"]."</td><td>".$row["martial"]."</td><td>".$row["employee"]."</td><td>".$row["nativeplace"]."</td><td>".$row["qualification"]."</td><td>".$row["mobile"]."</td><td>".$row["Identimarks"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row['dist']."</td><td>".$row['state']."</td><td>".$row['country']."</td><td>".$row['pincode']."</td><td>".$row['email']."</td><td>".$row['vid']."</td><td>".$row['pancard']."</td><td>".$row['pid']."</td></tr>";
  }
} else {
  echo "0 results";
}
?>

</tbody>
</table>
</div>

<br><br>

<!-- Ration Card -->

<div class="container  bg-warning">
  <h2>Ration Card List</h2>
  <p>Ration CARD Information is Here:-</p>            
  <table class="table table-hover bg-white ">
    <thead>
      <tr>
        <th>Card No</th>
        <th>Holder Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Family Name</th>
        <th>Family Relation</th>
        <th>Family Age</th>
        <th>Address</th>
        <th>Ward No</th>
        <th>House No</th>
        <th>District</th>
        <th>State</th>
        <th>Pin Code</th>

      </tr>
    </thead>
    <tbody>
        <?php
echo "Details of Ration ID=".$ration_id;
    $sql = "SELECT * from ration where Card_No='".$ration_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Card_No"]. " </td><td>" . $row["Holder_Name"]. " </td><td>" . $row["Gender"]. "</td><td>".$row["Age"]."</td><td>".$row["Family_Name"]."</td><td>".$row["Family_Relation"]."</td><td>".$row["Family_Age"]."</td><td>".$row["Address"]."</td><td>".$row["Ward_No"]."</td><td>".$row["House_No"]."</td><td>".$row["District"]."</td><td>".$row["State"]."</td><td>".$row["Pincode"]."</td></tr>";
  }
} else {
  echo "0 results";
}
?>

</tbody>
</table>
</div>
