<?php 
include('connection/config.php');
//mysql_query("DROP DATABASE `trustworthy` ");

$q = "TRUNCATE `archieve`;
TRUNCATE `google_result`;
TRUNCATE `temp_google_result`;
TRUNCATE `trustworthy_result`;
TRUNCATE `trustworthy_url`;";


$r = multiple_query($q);

/* PHP MySQL Script For All User: neeraj@librawebsolutions.com*/
/**************************************************************/

/*
	Function Multi Query Run
*/

function multiple_query($q) {

   $tok = strtok($q, ";n");

   while ($tok) {

       $results=mysql_query("$tok");

       $tok = strtok(";n");

   }

   return $results;

}
header('Location:welcome.php');
?>