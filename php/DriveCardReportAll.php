

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Drive Card Report All</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div class="container">
  <h2>Drive Card  List</h2>
  <p>Drive Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr style="font-family:helvetica">
        <th>License_no</th>
        <th>First_Name</th>
        <th>Middle_Name</th>
        <th>Last_Name</th>
        <th>Father_Name</th>
        <th>City</th>
        <th>State</th>
        <th>Pin code </th>
        <th>Contact_No</th>
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from drivecard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["License_no"]. " </td><td>" . $row["First_Name"]. " </td><td>" . $row["Middle_Name"]. "</td><td>".$row["Last_Name"]."</td><td>".$row["Father_Name"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Pincode"]."</td> <td>".$row["Contact_No"]."</td> <td>".$row["Gender"]."</td> <td>".$row["Type"]."</td><td><a href=deleteDriveCard.php?License_no=".$row["License_no"]."><img src='../icon/delete.png' width='30px' height='30px'/></a>
    <a href=updateDriveCard.php?License_no=".$row["License_no"]."><img src='../icon/edit.png' width='30px' height='30px'/></a>
    </td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();



    ?>


 
    </tbody>
  </table>
</div>

</body>
</html>