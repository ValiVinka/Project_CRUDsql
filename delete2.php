
<?php
include('header.php');
?>

<div align="center">
    <h1> Sigur doriti sa stergeti? </h1>
    <form method="POST" name="delete">
<input type="submit" name="delete" value="Sterge">

</form>
<form action="shop2.php">
<input type="submit" name="GoBack"  value="GoBack">
</form>
    

<?php



if(isset($_POST['delete'])){
if(isset($_GET["id"])){
    $iddorit=$_GET["id"];
   mysqli_query($dbC,"DELETE FROM `PlaciVideoAMD` where `id`='$iddorit'");
   header('location:shop2.php');
}
}
?>