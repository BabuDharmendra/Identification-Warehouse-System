

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Passport</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<form action="UpdateEditedPassport.php">
<div class="container">
  <h2>Passport Card List</h2>
  <p>Passport Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr style="font-family:helvetica">
      <th>pid</th>
       <th>address</th>
        <th>birthdate</th>
        <th>city</th>
        <th>country</th>
        <th>dist</th>
        <th>email</th>
        <th>employee</th>
        <th>fathername</th>
        <th>gender</th>
        <th>Identimarks</th>
        <th>martial</th>
        <th>mobile</th>
        <th>mothername</th>
        <th>nativeplace</th>
        <th>pancard</th>
        <th>pincode</th>
        <th>qualification</th>
        <th>state</th>
        <th>vid</th>

      </tr>
    </thead>
    <tbody>
    <?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "identity";
$pid=$_GET['pid'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from passport where pid='".$pid."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><input type='text' name='pid' value=".$row["pid"]. "></td><td><input type='text' name='address' value=".$row["address"]. "></td><td><input type='date' name='birthdate' value=".$row["birthdate"]. "></td><td><input type='text' name='city' value=".$row["city"]. "></td><td><input type='text' name='country' value=".$row["country"]. "></td><td><input type='text' name='dist' value=".$row["dist"]. "></td><td><input type='text' name='email' value=".$row["email"]. "></td><td><input type='text' name='employee' value=".$row["employee"]. "></td><td><input type='text' name='fathername' value=".$row["fathername"]. "></td><td><input type='text' name='gender' value=".$row["gender"]. "><td><input type='text' name='Identimarks' value=".$row["Identimarks"]. "><td><input type='text' name='martial' value=".$row["martial"]. "><td><input type='text' name='mobile' value=".$row["mobile"]. "><td><input type='text' name='mothername' value=".$row["mothername"]. "><td><input type='text' name='nativeplace' value=".$row["nativeplace"]. "><td><input type='text' name='pancard' value=".$row["pancard"]. "><td><input type='text' name='pincode' value=".$row["pincode"]. "><td><input type='text' name='qualification' value=".$row["qualification"]. "><td><input type='text' name='state' value=".$row["state"]. "><td><input type='text' name='vid' value=".$row["vid"]. "></tr>";
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