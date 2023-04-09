

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
<form action="UpdateEditedVoter.php">
<div class="container">
  <h2>Voter Card List</h2>
  <p>Voter Information is Here:-</p>            
  <table class="table table-hover">
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
    <?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "identity";
$vid=$_GET['vid'];

echo $vid;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from VoterCard where vid='".$vid."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><input type='text' name='vid' value=".$row["vid"]. "></td><td><input type='text' name='fname' value=".$row["FirstName"]. "></td><td><input type='text' name='mname' value=".$row["MiddleName"]. "></td><td><input type='text' name='lname' value=".$row["LastName"]. "></td><td><input type='text' name='fatherName' value=".$row["fatherName"]. "></td><td><input type='text' name='City' value=".$row["City"]. "></td><td><input type='text' name='State' value=".$row["State"]. "></td><td><input type='text' name='Contect' value=".$row["Contect"]. "></td><td><input type='text' name='Gender' value=".$row["Gender"]. "></td>";
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