<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
else 
echo " Connected";

$sql="CREATE DATABASE nbsu_tiet";
if (mysqli_query( $conn,$sql))
{ 
  echo "Database Created successfully";
}
else
{
echo "Error Creating Database:" . mysqli_error($conn);
}
mysqli_close($conn);
?>