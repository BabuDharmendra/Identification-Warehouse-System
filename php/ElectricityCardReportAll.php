

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Electricity Card All Report </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}

$sql = "SELECT * from electricity";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["consumerno"]."</td><td>" . $row["consumername"]. " </td><td>" . $row["dob"]. "</td><td>".$row["gender"]."</td><td>".$row["fhname"]."</td><td>".$row["houseno"]."</td><td>".$row["contact"]."</td><td>".$row["occupation"]."</td> <td>".$row["capacity"]."</td> <td>".$row["address"]."</td> <td>".$row["district"]."</td> <td>".$row["state"]."</td> <td>".$row["pin"]."</td><td><a href=deleteElectricityCard.php?consumerno=".$row["consumerno"]."><img src='../icon/delete.png' width='30px' height='30px'/></a>
    <a href=UpdateElectricityCard.php?consumerno=".$row["consumerno"]."><img src='../icon/edit.png' width='30px' height='30px'/></a>
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