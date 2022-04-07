
<?php
include('header.php');




?>


    <?php
  
  

  echo"  <form method='post' name='mcpu'>";
 
?>
<div align="center">
<table bgcolor="gray" style:" border=1px solid;">
    <tr>
        <td>
            <label for="Producator"><font size="6">Producator</label>
        </td>
        <td>
            <?php
            echo "<input type='text' name='Producator'>";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <label for="Serie"><font size="6">Serie</label>
        </td>
        <td>
            <?php
            echo "<input type='text' name='Serie'>";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <label for="Numar"><font size="6">Numar</label>
        </td>
        <td>
            <?php
            echo "<input type='text' name='Numar'>";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <label for="Performanta"><font size="6">Performanta</label>
        </td>
        <td>
            <?php
            echo "<input type='number' name='Performanta'>";
            ?>
        </td>
    </tr>

  
</table>
<input type="submit" value="ADAUGA" name="Modifica_cpu"  style="height:50px; width:200px">
</form>
<form action="shop2.php">
    <input type="submit" value="Go Back">
</form>
<?php

if(isset($_POST['Modifica_cpu']))
{
    if(count(array_filter($_POST))!=count($_POST)){
        echo "<h1> Va rugam completati toate campurile! </h1> <br>";
    }
else{
        
        $Producator=$_POST['Producator'];
        $Serie=$_POST['Serie'];
        $Numar=$_POST['Numar'];
        $Performanta=$_POST['Performanta'];      
        $sql = "INSERT INTO `PlaciVideoAMD` (`Producator`, `Serie`, `Numar`, `Performanta`) VALUES ('$Producator', '$Serie', '$Numar', '$Performanta')";
        if (mysqli_query($dbC, $sql)) {
            echo "Success";
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($dbC);
         }

   
   
}


}

?>