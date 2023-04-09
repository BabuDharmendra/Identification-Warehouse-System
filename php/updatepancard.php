

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Pancard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<form action="updateEditedPancard.php">
<div class="container">
  <h2>PAN Card List</h2>
  <p>PAN Card Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr>
        <th>pan_card_no</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>City</th>
        <th>State</th>
        <th>Contact</th>
        <th>Gender</th>
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
$pan_card_no=$_GET['pan_card_no'];

echo $vid;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from userpancard where pan_card_no='".$pan_card_no."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><input type='text' name='pan_card_no' value=".$row["pan_card_no"]. "></td><td><input type='text' name='first_name' value=".$row["first_name"]. "></td><td><input type='text' name='middil_name' value=".$row["middil_name"]. "></td><td><input type='text' name='last_name' value=".$row["last_name"]. "></td><td><input type='text' name='father_name' value=".$row["father_name"]. "></td><td><input type='text' name='city' value=".$row["city"]. "></td><td><input type='text' name='state' value=".$row["state"]. "></td><td><input type='text' name='contect' value=".$row["contect"]. "></td><td><input type='text' name='gender' value=".$row["gender"]. "></td>";
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