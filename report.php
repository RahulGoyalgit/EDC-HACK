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
$total=0;
for($i=1;$i<=22;$i++)
{
$sql="SELECT district,newborn_entries,no_dignosed,no_of_recomendations,no_of_deaths,no_of_references,lama,no_of_discharge FROM dist_data WHERE u_no=$i";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$j=0;
   while($row=mysqli_fetch_assoc($result))
{
 $a=$row['district'];
 $b[$j]=$row['no_of_deaths'];
$c[$j]=$row['no_of_recomendations'];
$d[$j]=$row['no_of_references'];
$e[$j]=$row['lama'];
$f[$j]=$row['newborn_entries'];
$g[$j]=$row['no_of_discharge'];
 $j++;
}
}
else
{
 echo "no rows found";
}$j--;
   $sum7[$i]=$a;
$ba=0;
for($x=0; $x<=$j; $x++)
{
   $ba += $b[$x];
}
$sum1[$i]=$ba;
$ca=0;
for($x=0; $x<=$j; $x++)
{
   $ca += $c[$x];
}
$sum2[$i]=$ca;
$da=0;
for($x=0; $x<=$j; $x++)
{
   $da += $d[$x];
}
$sum3[$i]=$da;
$ea=0;
for($x=0; $x<=$j; $x++)
{
   $ea += $e[$x];
}
$sum4[$i]=$ea;
$fa=0;
for($x=0; $x<=$j; $x++)
{
   $fa += $f[$x];
}
$sum5[$i]=$fa;
$ga=0;
for($x=0; $x<=$j; $x++)
{
   $ga += $g[$x];
}
$sum6[$i]=$ga;
}
mysqli_close($conn);
?>

<table border="2" cellspacing="10" cellpadding="10">
        <tr>
            <th>Districts</th>
            <th>Total No. of Deaths</th>
            <th>Total No. of Recommended Infants</th>
            <th>Total No. of Reffered Infants</th>
            <th>Total No. of Lama</th>
            <th>Total No. of Admissions</th>
            <th>Total No. of Discharged Infants</th>
        </tr>
        <tr class="1">
            <td><?php echo $sum7[1]; ?></td>
            <td><?php echo $sum1[1]; ?></td>
            <td><?php echo $sum2[1]; ?></td>
            <td><?php echo $sum3[1]; ?></td>
            <td><?php echo $sum4[1]; ?></td>
            <td><?php echo $sum5[1]; ?></td>
            <td><?php echo $sum6[1]; ?></td>
	</tr>
        <tr class="2">
            <td><?php echo $sum7[2]; ?></td>
            <td><?php echo $sum1[2]; ?></td>
            <td><?php echo $sum2[2]; ?></td>
            <td><?php echo $sum3[2]; ?></td>
            <td><?php echo $sum4[2]; ?></td>
            <td><?php echo $sum5[2]; ?></td>
            <td><?php echo $sum6[2]; ?></td>


        </tr>

        <tr class="3">
            <td><?php echo $sum7[3]; ?></td>
            <td><?php echo $sum1[3]; ?></td>
            <td><?php echo $sum2[3]; ?></td>
            <td><?php echo $sum3[3]; ?></td>
            <td><?php echo $sum4[3]; ?></td>
            <td><?php echo $sum5[3]; ?></td>
            <td><?php echo $sum6[3]; ?></td>

        </tr>

        <tr class="4">
            <td><?php echo $sum7[4]; ?></td>
            <td><?php echo $sum1[4]; ?></td>
            <td><?php echo $sum2[4]; ?></td>
            <td><?php echo $sum3[4]; ?></td>
            <td><?php echo $sum4[4]; ?></td>
            <td><?php echo $sum5[4]; ?></td>
            <td><?php echo $sum6[4]; ?></td>


        </tr>

        <tr class="5">
            <td><?php echo $sum7[5]; ?></td>
            <td><?php echo $sum1[5]; ?></td>
            <td><?php echo $sum2[5]; ?></td>
            <td><?php echo $sum3[5]; ?></td>
            <td><?php echo $sum4[5]; ?></td>
            <td><?php echo $sum5[5]; ?></td>
            <td><?php echo $sum6[5]; ?></td>
        </tr>

        <tr class="6">
            <td><?php echo $sum7[6]; ?></td>
            <td><?php echo $sum1[6]; ?></td>
            <td><?php echo $sum2[6]; ?></td>
            <td><?php echo $sum3[6]; ?></td>
            <td><?php echo $sum4[6]; ?></td>
            <td><?php echo $sum5[6]; ?></td>
            <td><?php echo $sum6[6]; ?></td>
        </tr>

        <tr class="7">
            <td><?php echo $sum7[7]; ?></td>
            <td><?php echo $sum1[7]; ?></td>
            <td><?php echo $sum2[7]; ?></td>
            <td><?php echo $sum3[7]; ?></td>
            <td><?php echo $sum4[7]; ?></td>
            <td><?php echo $sum5[7]; ?></td>
            <td><?php echo $sum6[7]; ?></td>        
	</tr>

        <tr class="8">
            <td><?php echo $sum7[8]; ?></td>
            <td><?php echo $sum1[8]; ?></td>
            <td><?php echo $sum2[8]; ?></td>
            <td><?php echo $sum3[8]; ?></td>
            <td><?php echo $sum4[8]; ?></td>
            <td><?php echo $sum5[8]; ?></td>
            <td><?php echo $sum6[8]; ?></td>
        </tr>

        <tr class="9">
            <td><?php echo $sum7[9]; ?></td>
            <td><?php echo $sum1[9]; ?></td>
            <td><?php echo $sum2[9]; ?></td>
            <td><?php echo $sum3[9]; ?></td>
            <td><?php echo $sum4[9]; ?></td>
            <td><?php echo $sum5[9]; ?></td>
            <td><?php echo $sum6[9]; ?></td>
        </tr>

        <tr class="10">
            <td><?php echo $sum7[10]; ?></td>
            <td><?php echo $sum1[10]; ?></td>
            <td><?php echo $sum2[10]; ?></td>
            <td><?php echo $sum3[10]; ?></td>
            <td><?php echo $sum4[10]; ?></td>
            <td><?php echo $sum5[10]; ?></td>
            <td><?php echo $sum6[10]; ?></td>
        </tr>

        <tr class="11">
            <td><?php echo $sum7[11]; ?></td>
            <td><?php echo $sum1[11]; ?></td>
            <td><?php echo $sum2[11]; ?></td>
            <td><?php echo $sum3[11]; ?></td>
            <td><?php echo $sum4[11]; ?></td>
            <td><?php echo $sum5[11]; ?></td>
            <td><?php echo $sum6[11]; ?></td>
        </tr>

        <tr class="12">
            <td><?php echo $sum7[12]; ?></td>
            <td><?php echo $sum1[12]; ?></td>
            <td><?php echo $sum2[12]; ?></td>
            <td><?php echo $sum3[12]; ?></td>
            <td><?php echo $sum4[12]; ?></td>
            <td><?php echo $sum5[12]; ?></td>
            <td><?php echo $sum6[12]; ?></td>
        </tr>

        <tr class="13">
            <td><?php echo $sum7[13]; ?></td>
            <td><?php echo $sum1[13]; ?></td>
            <td><?php echo $sum2[13]; ?></td>
            <td><?php echo $sum3[13]; ?></td>
            <td><?php echo $sum4[13]; ?></td>
            <td><?php echo $sum5[13]; ?></td>
            <td><?php echo $sum6[13]; ?></td>
        </tr>

        <tr class="14">
            <td><?php echo $sum7[14]; ?></td>
            <td><?php echo $sum1[14]; ?></td>
            <td><?php echo $sum2[14]; ?></td>
            <td><?php echo $sum3[14]; ?></td>
            <td><?php echo $sum4[14]; ?></td>
            <td><?php echo $sum5[14]; ?></td>
            <td><?php echo $sum6[14]; ?></td>
        </tr>

        <tr class="15">
            <td><?php echo $sum7[15]; ?></td>
            <td><?php echo $sum1[15]; ?></td>
            <td><?php echo $sum2[15]; ?></td>
            <td><?php echo $sum3[15]; ?></td>
            <td><?php echo $sum4[15]; ?></td>
            <td><?php echo $sum5[15]; ?></td>
            <td><?php echo $sum6[15]; ?></td>
        </tr>

        <tr class="16">
            <td><?php echo $sum7[16]; ?></td>
            <td><?php echo $sum1[16]; ?></td>
            <td><?php echo $sum2[16]; ?></td>
            <td><?php echo $sum3[16]; ?></td>
            <td><?php echo $sum4[16]; ?></td>
            <td><?php echo $sum5[16]; ?></td>
            <td><?php echo $sum6[16]; ?></td>
        </tr>

        <tr class="17">
            <td><?php echo $sum7[17]; ?></td>
            <td><?php echo $sum1[17]; ?></td>
            <td><?php echo $sum2[17]; ?></td>
            <td><?php echo $sum3[17]; ?></td>
            <td><?php echo $sum4[17]; ?></td>
            <td><?php echo $sum5[17]; ?></td>
            <td><?php echo $sum6[17]; ?></td>
        <tr class="18">
            <td><?php echo $sum7[18]; ?></td>
            <td><?php echo $sum1[18]; ?></td>
            <td><?php echo $sum2[18]; ?></td>
            <td><?php echo $sum3[18]; ?></td>
            <td><?php echo $sum4[18]; ?></td>
            <td><?php echo $sum5[18]; ?></td>
            <td><?php echo $sum6[18]; ?></td>
        </tr>

        <tr class="19">
            <td><?php echo $sum7[19]; ?></td>
            <td><?php echo $sum1[19]; ?></td>
            <td><?php echo $sum2[19]; ?></td>
            <td><?php echo $sum3[19]; ?></td>
            <td><?php echo $sum4[19]; ?></td>
            <td><?php echo $sum5[19]; ?></td>
            <td><?php echo $sum6[19]; ?></td>        
	</tr>

        <tr class="20">
            <td><?php echo $sum7[20]; ?></td>
            <td><?php echo $sum1[20]; ?></td>
            <td><?php echo $sum2[20]; ?></td>
            <td><?php echo $sum3[20]; ?></td>
            <td><?php echo $sum4[20]; ?></td>
            <td><?php echo $sum5[20]; ?></td>
            <td><?php echo $sum6[20]; ?></td>
        </tr>

        <tr class="21">
            <td><?php echo $sum7[21]; ?></td>
            <td><?php echo $sum1[21]; ?></td>
            <td><?php echo $sum2[21]; ?></td>
            <td><?php echo $sum3[21]; ?></td>
            <td><?php echo $sum4[21]; ?></td>
            <td><?php echo $sum5[21]; ?></td>
            <td><?php echo $sum6[21]; ?></td>
        </tr>

        <tr class="22">
            <td><?php echo $sum7[22]; ?></td>
            <td><?php echo $sum1[22]; ?></td>
            <td><?php echo $sum2[22]; ?></td>
            <td><?php echo $sum3[22]; ?></td>
            <td><?php echo $sum4[22]; ?></td>
            <td><?php echo $sum5[22]; ?></td>
            <td><?php echo $sum6[22]; ?></td>        </tr>


    </table>


</body>
</html>