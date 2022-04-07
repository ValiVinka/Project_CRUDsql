<?php
include('header.php');

?>






<div align="center">

<form action='login.php' method='post'>
   <table bgcolor="gray">
       <tr>
           <td>
               <label for="Nume"> <font size="7"> Nume:</label>
           </td>
           <td>
               <input type="text" name='user'>
           </td>
       </tr>
       <tr>
        <td>
           <label for="Pass"><font size="7">  Parola:</label>
        </td>
        <td>
            <input type="password" name='pass'>
        </td>
           
       </tr>
</table>
<input type="submit" name="authsubmit" value="Autentificare"  style="height:50px; width:320px">
</form>

<?php
if(isset($_POST['authsubmit'])){
    $user_introdus=$_POST['user'];
    $pass_introdus=$_POST['pass'];
        //verificare user
        
    $check_user=mysqli_query($dbC, "SELECT * from `users` WHERE `user` = '$user_introdus'"); 
    $numRosCheckUser=mysqli_num_rows($check_user);
    if(empty($numRosCheckUser)){
        echo "Autentificare esuata";
    }
    else
    {
        //Verificare parola
        $parola_hashuita=sha1($pass_introdus);  //hashuiesc parola 
        // extrag din baza de date
        $rs=mysqli_fetch_array($check_user);
        print_r($rs);

        if($parola_hashuita==$rs['passwd']){
            //autentificat
                $_SESSION['auth']='1';
                header('location:shop2.php');
            }
        else{
            //parola incorect
            echo"Bad pass";
        }
    }
}

?>