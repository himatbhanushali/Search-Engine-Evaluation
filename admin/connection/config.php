<?php 
$Server				=		"localhost"; 
$User				=		"root"; 
$Password			=		""; 
$Database			=		"trustworthy"; 
$Connection 		= 		mysql_connect($Server,$User,$Password); 
$Select_DataBase 	= 		mysql_select_db($Database);
?>