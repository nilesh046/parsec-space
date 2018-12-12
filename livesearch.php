<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
	color:black;
    border-collapse: collapse;
}

table, td, th {
	border-radius:5px;
    padding: 5px;
}
::-webkit-scrollbar { 
    display: none; 
}
tr:nth-child(odd) {background-color: #ffffff;}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {
background-color:powderblue;
}

th {
	text-align: center;
	color:white;
	background-color:mediumseagreen;
	}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$con=new mysqli("localhost","root","","space");
if (!$con) {
    echo"'Could not connect: ' ". mysqli_error($con);
}
$sql="SELECT * FROM oec WHERE planetidentifier like '".$q."%' order by distfromsunparsec;";
$result = mysqli_query($con,$sql);
if (!$result) {
    echo"Error:". mysqli_error($con);
    exit();
}
echo "<div style='left:5px;top:50px;overflow:auto;right:50px;max-height:380px;width:100%;'>";
	echo "<table><tr>";
	echo "<th>PlanetIdentifier</th>";
    echo "<th>TypeFlag</th>";
    echo "<th>PlanetMassJpt</th>";
    echo "<th>RadiusJpt</th>";
    echo "<th>PeroidDays</th>";
    echo "<th>SemiMajorAxis AU</th>";
    echo "<th>Eccentricity</th>";
    echo "<th>PeriastronDeg</th>";
    echo "<th>LongitudeDeg</th>";
    echo "<th>AscendingNodeDeg</th>";
    echo "<th>InclinationDeg</th>";
    echo "<th>SurfaceTemp K</th>";
    echo "<th>AgeGyr</th>";
    echo "<th>DiscoveryMethod</th>";
    echo "<th>DiscoveryYear</th>";
    echo "<th>LastUpdated</th>";
    echo "<th>RightAscension</th>";
    echo "<th>Declination</th>";
    echo "<th>DistFromSunParsec</th>";
    echo "<th>HostStarMassSlrMass</th>";
    echo "<th>HostStarRadiusSlrRad</th>";
    echo "<th>HostStarMetallicity</th>";
    echo "<th>HostStarTemp K</th>";
    echo "<th>HostStarAgeGyr</th>";
    echo "<th>ListPlanetIsOn</th>";
echo "</tr>";
while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td><b>".$row['PlanetIdentifier']."</b></td>";
    echo "<td>" . $row['TypeFlag'] . "</td>";
    echo "<td>" . $row['PlanetaryMassJpt'] . "</td>";
    echo "<td>" . $row['RadiusJpt'] . "</td>";
    echo "<td>" . $row['PeriodDays'] . "</td>";
    echo "<td>" . $row['SemiMajorAxisAU'] . "</td>";
    echo "<td>" . $row['Eccentricity'] . "</td>";
    echo "<td>" . $row['PeriastronDeg'] . "</td>";
    echo "<td>" . $row['LongitudeDeg'] . "</td>";
    echo "<td>" . $row['AscendingNodeDeg'] . "</td>";
    echo "<td>" . $row['InclinationDeg'] . "</td>";
    echo "<td>" . $row['SurfaceTempK'] . "</td>";
    echo "<td>" . $row['AgeGyr'] . "</td>";
    echo "<td>" . $row['DiscoveryMethod'] . "</td>";
    echo "<td>" . $row['DiscoveryYear'] . "</td>";
    echo "<td>" . $row['LastUpdated'] . "</td>";
    echo "<td>" . $row['RightAscension'] . "</td>";
    echo "<td>" . $row['Declination'] . "</td>";
    echo "<td>" . $row['DistFromSunParsec'] . "</td>";
    echo "<td>" . $row['HostStarMassSlrMass'] . "</td>";
    echo "<td>" . $row['HostStarRadiusSlrRad'] . "</td>";
    echo "<td>" . $row['HostStarMetallicity'] . "</td>";
    echo "<td>" . $row['HostStarTempK'] . "</td>";
    echo "<td>" . $row['HostStarAgeGyr'] . "</td>";
    echo "<td>" . $row['ListsPlanetIsOn'] . "</td>";
    echo "</tr>";
}
echo "</table></div>";

mysqli_close($con);
?>
</body>
</html>