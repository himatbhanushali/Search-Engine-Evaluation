<?php      
session_start();
include('connection/config.php');
$username=$_GET['username'];
$query="select * from tbigsearch  where USERNAME='".$username."'";
	$result=mysql_query($query) or die("select query not run");
	$row=mysql_fetch_array($result);
	//$count=mysql_num_rows($result);
		$name=$row['USERNAME'];
		//echo "$name";
		//print_r(mysql_fetch_array($result));
		if ($username==$name)
		{
			//$msg=1;
		
			echo "Error: User Name Already Exists.Please Enter Another Name";
				
			
			
		
		}
		else
		{
			
		 
		}
	
?>
