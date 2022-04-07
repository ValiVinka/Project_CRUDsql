<?php
include('header.php');
?>
<center>
    <br>
<h1> Sigur doriti sa va delogati?  </h1>

<form method="POST" name="logout">
<input type="submit" name="logout" value="LOG OUT" style="height:50px; width:150px">
</form>
<br>
<br>
<form method="POST" action="index.php">
<input type="submit" name="goback" value="Go Back" style="height:50px; width:200px">
</form>
<?php 
if(isset($_POST['logout'])){
    $_SESSION['auth']='0';
    session_destroy();
    header('location:index.php');
}

?>
