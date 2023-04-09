

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
<form action="updateEditedUid.php">
<div class="container">
  <h2>UID card List</h2>
  <p>UID Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr>
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
$Uid=$_GET['Uid'];

echo $vid;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from uid where Uid='".$Uid."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><input type='text' name='Uid' value=".$row["Uid"]. "></td><td><input type='text' name='Drive_card' value=".$row["Drive_card"]. "></td><td><input type='text' name='ElectricityBill_No' value=".$row["ElectricityBill_No"]. "></td><td><input type='text' name='Pancard_No' value=".$row["Pancard_No"]. "></td><td><input type='text' name='Passport_Id' value=".$row["Passport_Id"]. "></td><td><input type='text' name='Ration_Id' value=".$row["Ration_Id"]. "></td><td><input type='text' name='vid' value=".$row["vid"]. "></td>";
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