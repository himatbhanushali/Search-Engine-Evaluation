<?php 
include('connection/config.php');

/* Save keyword with random number in archieve*/

 		
		$keywords 	= 	$_REQUEST['keywords'];
		$rand_num = intval(pow(15,4)*rand());
		$date    	= 	date("F j, Y, g:i a");
		$insert = "INSERT INTO archieve SET 
		keyword 	= '$keywords', 
		rand_id		= '$rand_num',
		date 		= '$date'";
		mysql_query($insert) or die(mysql_error());			
		mysql_close( $Connection );
		/*echo $rand_num;*/




?>