<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="nbsu_tiet";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
else 
;
$a=$_POST['rec'];
$b=$_POST['ref'];
$c=$a+$b;

if($_POST['s1']=="Amritsar")
$uno=1;
if($_POST['s1']=="Barnala")
$uno=2;
if($_POST['s1']=="Bathinda")
$uno=3;
if($_POST['s1']=="Faridkot")
$uno=4;
 if($_POST['s1']=="Fatehgarh")
$uno=5;
 if($_POST['s1']=="Ferozpur")
$uno=6;
 if($_POST['s1']=="Fazilka")
$uno=7;
 if($_POST['s1']=="Gurdaspur")
$uno=8;
 if($_POST['s1']=="Hoshiarpur")
$uno=9;
 if($_POST['s1']=="Jalandhar")
$uno=10;
 if($_POST['s1']=="Kapurthala")
$uno=11;
 if($_POST['s1']=="Ludhiana")
$uno=12;
 if($_POST['s1']=="Mansa")
$uno=13;
 if($_POST['s1']=="Moga")
$uno=14;
 if($_POST['s1']=="Shri Muktsar Sahib")
$uno=15;
 if($_POST['s1']=="Pathankot")
$uno=16;
 if($_POST['s1']=="Patiala")
$uno=17;
 if($_POST['s1']=="Rupnagar")
$uno=18;
 if($_POST['s1']=="Mohali")
$uno=19;
 if($_POST['s1']=="Sangrur")
$uno=20;
 if($_POST['s1']=="Nawanshahr")
$uno=21;
 if($_POST['s1']=="Tarn Taran")
$uno=22;
 

$sql="INSERT INTO dist_data
 VALUES('$_POST[s1]','$_POST[taentries]','$_POST[dignosed]','$_POST[rec]',
'$_POST[Death]','$_POST[ref]','$_POST[lama]',$c,$uno)";
$d=$_POST['taentries'];
$e=$_POST['dignosed'];
$f=$_POST['Death'];
$g=$_POST['lama'];
$h=$a+$b+$f+$g;
if($e<=$d && $e==$h && $d>0)
{
if($conn->query($sql)==TRUE)
  {echo"<script type='text/javascript'>alert('Data submission successful!');</script>"; }
else
  echo "error creating records";
mysqli_close($conn);
}
else
{echo"<script type='text/javascript'>alert('Invalid Entry');</script>"; }
?>
<form>
<a href="Home.html"><input type="button" value="Home"></a>
</form>


</body>
</html>