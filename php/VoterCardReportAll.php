

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Voter All Report Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body >

<div class="container">
  <h2>Voter Card List</h2>
  <p>Voter Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;" >
    <thead  style="background-color:lightblue;">
      <tr style="font-family:helvetica">
        <th>Voter ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>City</th>
        <th>State</th>
        <th>Contact</th>
        <th>Gender</th>
        <th></th>
        <th></th>

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
$sql = "SELECT * from VoterCard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["vid"]. " </td><td>" . $row["FirstName"]. " </td><td>" . $row["MiddleName"]. "</td><td>".$row["LastName"]."</td><td>".$row["fatherName"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Contect"]."</td><td>".$row["Gender"]."</td><td> <a href=DeleteVoterCard.php?vid=".$row["vid"]."><img src='../icon/delete.png' width='30px' height='30px'/></a>
    <a href=UpdateVoterCard.php?vid=".$row["vid"]."><img src='../icon/edit.png' width='30px' height='30px'/></a>
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