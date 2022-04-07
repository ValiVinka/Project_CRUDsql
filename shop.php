<html>
<head>
	<style>

		td{
			text-align:center;
			vertical-align:center;
		}
		</style>
<title> Pagina upgrade </title> 

</head>


<body>

<?php
	include('header.php');

?>

	<center> <h1> Produsele noastre: </h1> </center>
	


<?php


?>


	<?php

$procesor_gaming="SELECT * FROM `ProcesoareAMD` WHERE `Performanta` > 0";
$check=mysqli_query($dbC, $procesor_gaming) ;
echo "<center>  <h1> PROCESOARE </h1>";
echo "<table border='1'  style='font-size:32px'>";
echo "<tr bgcolor='gray'> <td > id </td> <td width='100'> Producator </td> <td width='200'> Serie </td> <td width='150'> Numar </td> <td> Performanta </td>";
while($row = mysqli_fetch_assoc($check)){
	echo "<tr>  <td>" . $row["id"] . "</td> <td>" . $row["Producator"] . "</td><td>  " .  $row["Serie"] . "  </td><td>" .  $row["Numar"] . "</td> <td>".$row["Performanta"]."</td>"; 
	echo "</tr>";
	
}

echo "</table>";
$placa_video="SELECT * FROM `PlaciVideoAMD` WHERE `Performanta` > 0";
$check2=mysqli_query($dbC, $placa_video) ;
echo "<center>  <h1> Placi Video </h1>";
echo "<table border='1' style='font-size:32px' >";
echo "<tr bgcolor='gray'> <td > id </td> <td width='100'> Producator </td> <td width='200'> Serie </td> <td width='150'> Numar </td> <td> Performanta </td>";
while($row2 = mysqli_fetch_assoc($check2)){
	echo "<tr>  <td>" . $row2["id"] . "</td> <td>" . $row2["Producator"] . "</td><td>  " .  $row2["Serie"] . "  </td><td>" .  $row2["Numar"] . "</td> <td>".$row2["Performanta"]."</td>"; 
	echo "</tr>";
}


	?>
	</table>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	