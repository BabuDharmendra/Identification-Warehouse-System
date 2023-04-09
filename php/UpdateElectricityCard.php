

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
<body>
<form action="UpdateEditedElectricity.php">
<div class="container">
  <h2>Electricity Card List</h2>
  <p>Electricity Card Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr style="font-family:helvetica">
      <th>Consumer Number</th>
        <th>Consumer Name</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Father Name</th>
        <th>House Number</th>
        <th>Contact</th>
        <th>Occupation </th>
        <th>Capacity</th>
        <th>Address</th>
        <th>District</th>
        <th>State</th>
        <th>PIN Number</th>
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

$consumerno=$_GET['consumerno'];

echo $consumerno;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from electricity where consumerno='".$consumerno."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><input type='text' name='consumerno' value=".$row["consumerno"]."></td><td><input type='text' name='consumername' value=".$row["consumername"]. "></td><td><input type='text' name='dob' value=".$row["dob"]. "></td><td><input type='text' name='gender' value=".$row["gender"]. "></td><td><input type='text' name='fhname' value=".$row["fhname"]. ">  </td><td><input type='text' name='houseno' value=".$row["houseno"]. "> </td><td><input type='text' name='contact' value=".$row["contact"]. "> </td><td><input type='text' name='occupation' value=".$row["occupation"]. "> </td><td><input type='text' name='capacity' value=".$row["capacity"]. ">  </td> <td> <input type='text' name='address' value=".$row["address"]."></td><td><input type='text' name='district' value=".$row["district"]. ">  </td><td><input type='text' name='state' value=".$row["state"]. "> </td><td><input type='text' name='pin' value=".$row["pin"]. "></td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();



    ?>
<tr>
<td><input type="submit" value="UPDATE"></td>

</tr>
    </tbody>
  </table>
</div>

</body>
</html>