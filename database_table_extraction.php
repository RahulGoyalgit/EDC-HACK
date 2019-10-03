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
$sql="SELECT district,newborn_entries FROM dist_data WHERE u_no=$i";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$j=0;
   while($row=mysqli_fetch_assoc($result))
{
 $a=$row['district'];
 $b[$j]=$row['newborn_entries'];
 $j++;
}
}
else
{
 echo "no rows found";
}$j--;
$ba=0;
for($x=0; $x<=$j; $x++)
{
   $ba += $b[$x];
}
for($x=0; $x<=$j; $x++)
{
   $total += $b[$x];
}
$sum[$i]=$ba;

}
for($i=1;$i<=22;$i++)
{
$sum1[$i]=($sum[$i]/$total)*100;
}
mysqli_close($conn);
?>
<h1>Graphical Representation</h1><br>

<script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,

                title: {
                    text: "District Wise Information 0f Total Entries"
                },
                axisX: {
                    interval: 1
                },
                axisY2: {
                    interlacedColor: "rgba(1,77,101,.2)",
                    gridColor: "rgba(1,77,101,.1)",
                    title: "Percentage admissions in NBSU"
                },
                data: [{
                    type: "bar",
                    name: "companies",
                    axisYType: "secondary",
                    color: "#014D65",
                    dataPoints: [
                        { y: <?php echo $sum1[1]; ?>, label: "Amritsar" },
                        { y: <?php echo $sum1[2]; ?>, label: "Barnala" },
                        { y: <?php echo $sum1[3]; ?>, label: "Bathinda" },
                        { y: <?php echo $sum1[4]; ?>, label: "Faridkot" },
                        { y: <?php echo $sum1[5]; ?>, label: "Fatehgarh" },
                        { y: <?php echo $sum1[6]; ?>, label: "Ferozpur" },
                        { y: <?php echo $sum1[7]; ?>, label: "Fazilka" },
                        { y: <?php echo $sum1[8]; ?>, label: "Gurdaspur" },
                        { y: <?php echo $sum1[9]; ?>, label: "Hoshiarpur" },
                        { y: <?php echo $sum1[10]; ?>, label: "Jalandhar" },
                        { y: <?php echo $sum1[11]; ?>, label: "Kapurthala" },
                        { y: <?php echo $sum1[12]; ?>, label: "Ludhiana" },
                        { y: <?php echo $sum1[13]; ?>, label: "Mansa" },
                        { y: <?php echo $sum1[14]; ?>, label: "Moga" },
                        { y: <?php echo $sum1[15]; ?>, label: "Shiv Mukstar Sahib" },
                        { y: <?php echo $sum1[16]; ?>, label: "Pathankot" },
                        { y: <?php echo $sum1[17]; ?>, label: "Patiala" },
                        { y: <?php echo $sum1[18]; ?>, label: "Rupnagar" },
                        { y: <?php echo $sum1[19]; ?>, label: "Mohali" },
                        { y: <?php echo $sum1[20]; ?>, label: "Sangrur" },
                        { y: <?php echo $sum1[21]; ?>, label: "Nawanshahr" },
                        { y: <?php echo $sum1[22]; ?>, label: "Tarn Taran" }
                    ]
                }]
            });
            chart.render();

        }

    </script>

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="canvasjs.min.js"></script>

</body>
</html>