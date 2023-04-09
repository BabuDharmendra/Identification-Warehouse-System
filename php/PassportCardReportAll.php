

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Passport Card Report All</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div class="container">
  <h2>Passport Card List</h2>
  <p>Passport Card Information is Here:-</p>            
  <table class="table table-hover" style="background-color:orange;">
    <thead style="background-color:lightblue;">
      <tr style="font-family:helvetica">
       
      <th>pid</th>
       <th>address</th>
        <th>birthdate</th>
        <th>city</th>
        <th>country</th>
        <th>dist</th>
        <th>email</th>
        <th>employee</th>
        <th>fathername</th>
        <th>gender</th>
        <th>Identimarks</th>
        <th>martial</th>
        <th>mobile</th>
        <th>mothername</th>
        <th>nativeplace</th>
        <th>pancard</th>
        <th>pincode</th>
        <th>qualification</th>
        <th>state</th>
        <th>voterid</th>
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
$sql = "SELECT * from passport";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["pid"]. " </td><td>" . $row["address"]. " </td><td>" . $row["birthdate"]. "</td><td>".$row["city"]."</td><td>".$row["country"]."</td><td>".$row["dist"]."</td><td>".$row["email"]."</td><td>".$row["employee"]."</td><td>".$row["fathername"]."</td><td>".$row["gender"]."</td><td>".$row["Identimarks"]."</td><td>".$row["martial"]."</td><td>".$row["mobile"]."</td><td>".$row["mothername"]."</td><td>".$row["nativeplace"]."</td><td>".$row["pancard"]."</td><td>".$row["pincode"]."</td><td>".$row["qualification"]."</td><td>".$row["state"]."</td><td>".$row["vid"]."</td><td><a href=deletePassportCard.php?pid=".$row["pid"]."><img src='../icon/delete.png' width='30px' height='30px'/></a></td><td>
    <a href=UpdatePassportCard.php?pid=".$row["pid"]."><img src='../icon/edit.png' width='30px' height='30px'/></a>
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