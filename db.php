<?php 
//conector de mysql:

        //Variabile Date
        $server='localhost';
        $user='2022.vinka.paul-valentin';
        $pass='Passwd';
        $db='2022.vinka.paul-valentin';

        //functii de executie


$dbC=mysqli_connect($server,$user,$pass) or die("autentificare esuata?");
mysqli_select_db($dbC,$db);
mysqli_set_charset($dbC,"utf8") or die("nu merge?");
?>