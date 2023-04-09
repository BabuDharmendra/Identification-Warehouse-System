
<!DOCTYPE html>
<html lang="en">
<head>
  <title>user card list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div class="container">
  <h2>user Card List</h2>
  <p> User card  Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr style="font-family:helvetica">

        <th>User Number</th>
        <th>Driving License No.</th>
        <th>Electricity Bill No.</th>
        <th>PAN Card No.</th>
        <th>Passport NO.</th>
        <th>Ration Card No.</th>
        <th>Voter ID Number</th>
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
$sql = "SELECT * from usercard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["u_no"]. " </td><td>" . $row["drive_card"]. " </td><td>" . $row["electricitybill_no"]. "</td><td>".$row["pancard_no"]."</td><td>".$row["passport_id"]."</td><td>".$row["ration_id"]."</td><td>".$row["vid"]."</td><td><a href=DeleteUserCard.php?u_no=".$row["u_no"]."><img src='../icon/delete.png' width='30px' height='30px'/></a>
    <a href=UpdateUserCard.php?u_no=".$row["u_no"]."><img src='../icon/edit.png' width='30px' height='30px'/></a>
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