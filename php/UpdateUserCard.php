

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
<form action="UpdateEditedUserCard.php">
<div class="container">
  <h2>User  Card List</h2>
  <p>User Card  Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr>
        <th>u_no</th>
        <th>drive_card</th>
        <th>electricitybill_no</th>
        <th>pancard_no</th>
        <th>passport_id</th>
        <th>ration_id</th>
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
$u_no=$_GET['u_no'];

echo $u_no;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$sql = "SELECT * from userCard where u_no='".$u_no."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><input type='text' name='u_no' value=".$row["u_no"]. "></td><td><input type='text' name='drive_card' value=".$row["drive_card"]. "></td><td><input type='text' name='electricitybill_no' value=".$row["electricitybill_no"]. "></td><td><input type='text' name='pancard_no' value=".$row["pancard_no"]. "></td><td><input type='text' name='passport_id' value=".$row["passport_id"]. "></td><td><input type='text' name='ration_id' value=".$row["ration_id"]. "></td><td><input type='text' name='vid' value=".$row["vid"]. "></td>";
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