

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAN Card Report All</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div class="container">
  <h2>PAN Card  List</h2>
  <p>PAN Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr style="font-family:helvetica">
        <th>pan_card_no</th>
        <th>First_Name</th>
        <th>Middle_Name</th>
        <th>Last_Name</th>
        <th>Father_Name</th>
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from userpancard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["pan_card_no"]. " </td><td>" . $row["first_name"]. " </td><td>" . $row["middil_name"]. "</td><td>".$row["last_name"]."</td><td>".$row["father_name"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["contect"]."</td><td>".$row["gender"]."</td> <td><a href=deletepancard.php?pan_card_no=".$row["pan_card_no"]."><img src='../icon/delete.png' width='30px' height='30px'/></a>
    <a href=updatepancard.php?pan_card_no=".$row["pan_card_no"]."><img src='../icon/edit.png' width='30px' height='30px'/></a>
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