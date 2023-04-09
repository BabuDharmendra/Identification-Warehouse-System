

<!DOCTYPE html>
<html lang="en">
<head>
  <title> UID Report ALL </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div class="container">
  <h2>UID Card List</h2>
  <p>UID Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr style="font-family:helvetica">
        <th>Uid	</th>
        <th>Drive_card</th>
        <th>ElectricityBill_No</th>
        <th>Pancard_No</th>
        <th>Passport_Id	</th>
        <th>Ration_Id</th>
        <th>vid</th>
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
$sql = "SELECT * from uid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Uid"]. " </td><td>" . $row["Drive_card"]. " </td><td>" . $row["ElectricityBill_No"]. "</td><td>".$row["Pancard_No"]."</td><td>".$row["Passport_Id"]."</td><td>".$row["Ration_Id"]."</td><td>".$row["vid"]."</td> <td><a href=deleteuid.php?Uid=".$row["Uid"]."><img src='../icon/delete.png' width='30px' height='30px'/></a>
    <a href=updateuid.php?Uid=".$row["Uid"]."><img src='../icon/edit.png' width='30px' height='30px'/></a>
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