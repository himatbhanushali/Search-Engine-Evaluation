<?php      
session_start();
$adminid=$_SESSION['username'];
$_SESSION['username']="";
$_SESSION['superadmin']="";
header("location:index.php");
?>

