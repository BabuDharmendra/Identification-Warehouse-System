

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Drive card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<form action="updateEditedDriveCard.php">
<div class="container">
  <h2>Drive Card List</h2>
  <p>Drive Card Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr>
        <th>License_no</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>City</th>
        <th>State</th>
        <th> Pin Code</th>
        <th>Contact</th>
        <th>Gender</th>
        <th>Type</th>
        <th> </th>
        <th> </th>

      </tr>
    </thead>
    <tbody>
    <?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "identity";
$License_no=$_GET['License_no'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from drivecard where License_no='".$License_no."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><input type='text' name='License_no' value=".$row["License_no"]. "></td><td><input type='text' name='First_Name' value=".$row["First_Name"]. "></td><td><input type='text' name='Middle_Name' value=".$row["Middle_Name"]. "></td><td><input type='text' name='Last_Name' value=".$row["Last_Name"]. "></td><td><input type='text' name='Father_Name' value=".$row["Father_Name"]. "></td><td><input type='text' name='City' value=".$row["City"]."></td> <td> <input type='text' name='State' value=".$row["State"]. "></td> <td><input type='text' name='Pincode' value=".$row["Pincode"]. "></td> <td><input type='text' name='Contact_No' value=".$row["Contact_No"]. "></td><td><input type='text' name='Gender' value=".$row["Gender"]. "></td><td><input type='text' name='Type' value=".$row["Type"]. "></td>";
  }
} else {
  echo "0 results";
}
$conn->close();



    ?>
<td><input type="submit" value="UPDATE"></td>

</tr>
    </tbody>
  </table>
</div>

</body>
</html>