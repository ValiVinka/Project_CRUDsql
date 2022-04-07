

<?php

include('header.php');

?>
<form method='post'>
<center><h1>Send us a message! / var php </h1>
<table bgcolor="gray">
    <tr>
        <td>
            <label for="Nume"><font color="aqua">Nume</label>
        </td><td>
            <input type="text" name="Nume" size="20"> </td>
            
    </tr>
    <tr>
        <td>
            <label for="Email"><font color="aqua">Email</label>
        </td><td>
            <input type="text" name="Email" size="20"> </td>
            
    </tr>
    <tr>
        <td>
            <label for="mesaj"><font color="aqua">Mesaj</label>
        </td>
        <td>
            <textarea name="mesaj" cols="40" rows="5"> </textarea>
        </td>
    </tr>
</table>

<input type="submit" name="submit" value="Trimite!">
</form>

<?php
if(isset($_POST['submit'])){
$to = "vinka.paul-valentin@stud19.umfst.ro";
$subject = "De la TehWeb ".$_POST['Nume'];
$txt = $_POST['mesaj'];
$header="From: ".$_POST['Email'];

if(mail($to,$subject,$txt,$header)){
    echo    "Email trimis cu succes!";
}
else
echo "Email failed";
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1>Send us a message! / varianta HTML ish</h1>
<form action="https://formsubmit.co/vinka.paul-valentin@stud19.umfst.ro" method="POST">


Name:<br>


<input type="text" size="20" name="ContactName" style="height:30px"><br><br>

Email:<br>
<input type="text" size="20" name="ContactEmail" style="height:30px"><br><br>

Message:<br> <textarea name="Comment" rows="6" cols="50">


</textarea><br><br> <input type="submit" value="Submit"> </form>
