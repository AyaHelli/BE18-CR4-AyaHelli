<?php
$username="root" ;
$hostname="127.0.0.1";
$pass="";
$db_name="be18_cr4_ayahelli_biglibrary";
$conn = mysqli_connect($hostname,$username,$pass,$db_name);
if(!$conn){
    die ("error");
}
?>