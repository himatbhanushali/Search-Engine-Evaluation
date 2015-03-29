<?
session_start();
include('connection/config.php');
if(isset($_POST['Submit']))
	 {
		  	$username=$_POST['username'];
		  	$password=$_POST['password'];
		  	$sql="select * from adminuser where username='$username' AND password='$password'";
			$rs=mysql_query($sql) or die(mysql_error());
		  	$data=mysql_fetch_array($rs);
			if($data)
            {
				$username=$data['username']; 
				$superadmin=$data['superadmin'];
				$id=$data['id'];
                $_SESSION['username']=$username;
				$_SESSION['superadmin']=$superadmin;
				$_SESSION['id']=$id;
				$date=date("F j, Y, g:i a");
			$update="update adminuser set lastlogin='".$date."' where id='".$id."'";
			$rs=mysql_query($update) or die(mysql_error());
			
                header("location:welcome.php");
	            exit();
				
        	}
            else
            {
            	header("location:index.php?msg=Sorry: Invalid Username and Password!!!");
				exit();
            }
					
		}
?>
