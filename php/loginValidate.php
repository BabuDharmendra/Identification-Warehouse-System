<?php
$serverName="localhost:3308";
$username="root";
$password=" ";
$dbname="identity";

//$uid=$_POST['uid'];
//$passsword=$_POST['passsword'];

$uid="uid01";
$passsword="123";


$con=new mysqli($serverName,$username,$password,$dbname);
# Making database connection

$sql="select * from login where uid='".$uid."' and passsword='".$passsword."'";

$result=$con->query($sql);
  # Fetching resultset(records) from database by executing query

if($result->num_rows >0){
  if($result->num_rows >0){
  header('Location:http://localhost:80/identification/UI/linkAll.html');
  
      }
  else
      { header('Location:login.html');
          
          
      }
  
    }
   
?>