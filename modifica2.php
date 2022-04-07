
<?php
include('header.php');




?>


    <?php
   $idd=$_GET['id'];
   $detalii=mysqli_query($dbC,"SELECT * FROM `PlaciVideoAMD` WHERE `id`='$idd' ");
   $rs=mysqli_fetch_array($detalii);
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
            echo "<input type='text' name='Producator' value='".$rs['Producator']."'>";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <label for="Serie"><font size="6">Serie</label>
        </td>
        <td>
            <?php
            echo "<input type='text' name='Serie' value='".$rs['Serie']."'>";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <label for="Numar"><font size="6">Numar</label>
        </td>
        <td>
            <?php
            echo "<input type='text' name='Numar' value='".$rs['Numar']."'>";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <label for="Performanta"><font size="6">Performanta</label>
        </td>
        <td>
            <?php
            echo "<input type='number' name='Performanta' value='".$rs['Performanta']."'>";
            ?>
        </td>
    </tr>

  
</table>
<input type="submit" value="MODIFICA" name="Modifica_cpu">
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
        $sql = "UPDATE `PlaciVideoAMD` SET `Producator`='$Producator', `Serie`='$Serie', `Numar`='$Numar', `Performanta`='$Performanta' WHERE `id`='$idd' ";
        if (mysqli_query($dbC, $sql)) {
            echo "S-a modificat cu succes id-ul ".$idd."! <br>";
            header('location:shop2.php');
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($dbC);
         }

   
   
}


}

?>