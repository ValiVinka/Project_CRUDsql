<html>
<head><link rel="stylesheet" href="style22.css">
<style>
		td{
			padding:30px;
		}
	</style>

</head>
<body>

		
<?php
include('header.php');
?>
	
	
	<br>
	<br>
	<br>
	<div align="center">

	<table bgcolor="gray">
		<tr>
			<td>	<img src=" https://s13emagst.akamaized.net/products/26557/26556186/images/res_ee16c4af0ae468f522c8498ba086d55a.jpg" width="300" height="300"> </td>
				<td>
	<h4> <font size="5"> Pentru a simti upgrade-ul unei masini mai vechi, unul dintre cele mai mari diferente le face un SSD. </h4>


	
	<br> Cu viteza de peste 10 ori mai mare in comparatie cu un HDD traditional, acest mediu de stockare va va imbunatatii experienta de indata.
</td>
</tr>
<tr>
<td>
<img src="https://e-licente.ro/23804-large_default/amd-procesoare-amd-cpu-ryzen-7-3800x-100100000025box.jpg" width="300" height="300">
</td>	
	<br> <td>
 	<h4> <font size="5">  O alta componenta, dar care este mai greu de imbunatatit este procesorul. Pentru a imbunatatii procesorul trebuie sa avem grija ca soclul acestuia sa fie compatibil cu 
	sochetul placii de baza.
</td>
</tr>
<tr>

<td  width="300" height="300">
	<img src="https://images.gnwcdn.com/2019/articles/2019-09-28-10-35/gpu-power-ladder-all-graphics-cards-tested-1569663337391.jpg/EG11/resize/1200x-1/gpu-power-ladder-all-graphics-cards-tested-1569663337391.jpg" width="250" height="250">

</td>
<td>
	<h4> <font size="5"> Componenta cea mai importanta pentru jocuri video este placa video. Aceasta are componente speciale cu scopul randarii rapide a obiectelor 3d, si calcularii rapide si precise a umbrelor.

</td>
</tr>
</table>
	
	
	
	<br>
	<br>
	<br>
	
	<h2> Inserati-va componentele si uzul dorit si va vom recomanda upgrade-uri
</h2>

<h3> <a href="https://imgur.com/a/GGG2ecq" target="_blank">Tutorial pentru aflare componente</a> </h3>
</div>
	<br>

	

			
				
		<?php
			$query="SELECT * FROM `ProcesoareAMD`";
			$result = mysqli_query($dbC,$query);				 
		?>
		<center>
		<form method="POST">
			<table border="1">
			<tr>
				<td>
					<label for="uz">Uzul PC</label>
				</td>
				<td>
					<select name="uz">
						<option value="casual">Casual</option>
						<option value="gaming">Gaming</option>
						<option value="heavy">Heavy Gaming</option>
					</select>
				</td>
			</tr>	
			
			<tr>
				<td>
			<label for="cpu">CPU</label></td>
	</td><td><select name="cpu">
		
			<?php
			$pct=0;
			while($row=mysqli_fetch_assoc($result)){
				echo "<option value='".$row["Performanta"]."'>'".$row["Numar"]."'</option>";
				
			}
			
			
			?>
			</select>
			</td>
		</tr>
				<?php
					$queryGPU="SELECT * FROM `PlaciVideoAMD`";
					$result2=mysqli_query($dbC,$queryGPU);
					
				
				?>
				<td>
					<label for="gpu">GPU</label>
		</td>
		<td>
						<select name="gpu" >
							<?php
								while($row2=mysqli_fetch_assoc($result2)){
									echo "<option value='".$row2["Performanta"]."'>'".$row2["Numar"]."'</option>";

								}
							?>
								</select>
							
							
					
				</td>
		<tr>
							<td>
								<label for="SSD">Stockare</label>
							</td>
							<td>
								<select name="SSD" >
									<option value="SSD">SSD</option>
									<option value="HDD">HDD</option>
								</select>
							</td>

		</tr>
			
			
		<tr>
			<td>
				<label for="ram">RAM</label>
			</td>
			<td>
				<select name="ram" >
					<option value="4">4 GB</option>
					<option value="8">8 GB</option>
					<option value="16">16 GB</option>
					<option value="32">32 GB</option>
				</select>
			</td>
		</tr>
		<tr>
				<td colspan="2">
			<center><input type="submit" name="submit" value="Apasa pentru evaluare!" style="height:50px; width:200px"> </center>
		</td>
	</tr>
		
		</form>
		</table>
			<?php
			if(isset($_POST['submit'])){
				$pct=$pct+$_POST['cpu']+$_POST['gpu'];
				$ok=1;
					if($_POST["uz"]=="casual"){
					if($_POST["ram"]<8)
					{
						echo "<font color='red'> Nu ajung doar 4gb RAM pentru orice uz! Computerul se va comporta foarte incet dupa o perioada de timp! </font>";
					}
					else echo "<font color='green'> PC-ul este indeajuns pentru folosire casual. </font>";
					if($_POST["SSD"]=="HDD")
						echo "<font color='orange'> Va recomandam un SSD pentru o experienta mai placuta </font>";
					}
					if($_POST["uz"]=="gaming"){
						if($_POST['cpu']<30){
							$ok=0;
						echo "<font color='red'> Procesorul selectat nu este destul de performant pentru gaming! Va recomandam un procesor cu performanta de cel putin '30' din sectiunea STOCK </font> <br>" ;
						}
						if($_POST['gpu']<30){
									$ok=0;
						echo "<font color='red'> Procesorul selectat nu este destul de performant pentru gaming! Va recomandam o placa video cu performanta de cel putin '30' din sectiunea STOCK </font> <br>" ;
						}
						if($_POST['ram']<8 )
						{	echo "<font color='red'> Nu ajung doar 4gb RAM pentru orice uz! Computerul se va comporta foarte incet dupa o perioada de timp! </font>";
							$ok=0;

						}
						if($_POST['ram']<16){
							echo "<font color='orange'> In unele jocuri 8gb de RAM nu mai sunt de ajuns! </font>";

						}
						if($ok==1)
						echo "<font color='green'> PC-ul este indeajuns pentru folosire gaming. </font>";
					}
					if($_POST["uz"]=="heavy"){
						if($_POST['cpu']<60){
							$ok=0;
						echo "<font color='red'> Procesorul selectat nu este destul de performant pentru gaming! Va recomandam un procesor cu performanta de cel putin '30' din sectiunea STOCK </font> <br>" ;
						}
						if($_POST['gpu']<60){
									$ok=0;
						echo "<font color='red'> Placa video selectata nu este destul de performant pentru gaming! Va recomandam o placa video cu performanta de cel putin '30' din sectiunea STOCK </font> <br>" ;
						}
						if($_POST['ram']<8 )
						{	echo "<font color='red'> Nu ajung doar 4gb RAM pentru orice uz! Computerul se va comporta foarte incet dupa o perioada de timp! <br> </font>";
							$ok=0;

						}
						if($_POST['ram']<16){
							echo "<font color='orange'> In unele jocuri 8gb de RAM nu mai sunt de ajuns! </font>";

						}
						if($ok==1)
						echo "<font color='green'> PC-ul este indeajuns pentru folosire heavy gaming. </font>";
					}
			}
			?>



	
</body>
	
	
</html>