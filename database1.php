<html>
<body>
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
mysqli_close($conn);
?>
</body>
</html>