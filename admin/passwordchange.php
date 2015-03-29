<?
include('connection/config.php');
  session_start();
		 $id=$_REQUEST['id'];
		 $_SESSION['user']=$id;
		 $newpass=$_REQUEST['newpass'];
		 $admintype=$_REQUEST['admintype'];
		 if($admintype=="")
		 {
		   $admintype="No";
		 }
		$query="update adminuser  set password='$newpass',superadmin='$admintype' where id='$id'";
 	 	$result=mysql_query ($query) or die(mysql_error()); 
		
	    header('Location:adminedit.php?error=nill');
?>		