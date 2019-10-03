<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="nbsu_tiet";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
else 
echo " Connected";

$sql="CREATE TABLE dist_data(
district VARCHAR(30) NOT NULL ,
newborn_entries INT NOT NULL ,
no_dignosed INT,
no_of_recomendations INT,
no_of_deaths INT ,
no_of_references INT,
lama INT ,
no_of_discharge INT,
u_no INT )";

mysqli_select_db($conn,$dbname);
if(mysqli_query($conn, $sql))
  echo "tables created";
else
  echo "error in creating tables";
mysqli_close($conn);
?>
</body>
</html>