<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


<title>
	:: Update User Page ::
</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">


<style type="text/css">
<!--
.style1 {
	font-family: Verdana;
	font-size: 16px;
	font-weight: bold;
	color: #006600;
}
-->
</style>
<script language="javascript">
function test()
	{
	
	if(document.form1.newpass.value=='')
	{
	alert("Error:Enter New Password!!");
	document.form1.newpass.value='';
	document.form1.newpass.focus();
			 	return (false);
	}
	if(document.form1.newpass.value!=document.form1.newpass1.value)
	{
	alert("Error:Enter Password not mathch try again!!");
	document.form1.newpass.value="";
	document.form1.newpass1.value="";
	document.form1.newpass.focus();
			  	return (false);
	}	
		
	 }
</script>

</head><body>


        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td colspan="2">
                    <? include_once("head.php"); ?>
                </td>
            </tr>
            <tr>
                <td class="middlepartcss" colspan="2" valign="middle" align="center">
                    <!-- Table Start For General Settings Menu -->
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td valign="top" width="220" align="left">
                                <? include_once("leftpanel.php"); 
								$id=$_REQUEST['id'];
	
				$sql="select * from  adminuser  where id='$id'";
				$rs=mysql_query($sql) or die(mysql_error());
				$result=mysql_fetch_array($rs);
								?> 
                            </td>
                            <td valign="top" align="right">
                                <!--Table For Content Place Holder -->
                                <table width="99%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td class="loginboxcss" valign="top" align="left" height="300"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                <tbody><tr>
                                                    <td class="NormalText" valign="top">
                                                        <div>
                                                            
    <table width="99%" border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td valign="top" align="left">
                <div class="rightpanelheadingcss" align="left">
                    <strong>Update User Page</strong></div>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="left" height="5">
            </td>
        </tr>
        <tr>
            <td class="loginboxcss" valign="top" align="left" height="300">
                <div align="left">
                
               <table width="500" align="center" class="login_text" >
<form method="post" action="passwordchange.php?id=<? echo $id ?>"  name="form1" id="form1" enctype="multipart/form-data"> 
								<tr>
								  <td colspan="2" align="left" valign="middle" class="rightpanelheadingcss"><strong>Update Admin Login Info</strong></td>
		  </tr>
								<tr>
								  <td colspan="2" align="left" class="redtext">
								  <? 
								     if(isset($_REQUEST['error']))
									 {
									    $id=$_REQUEST['id'];
									   $massege="User Password Change Sucessfully";
									   $sql="select * from  adminuser  where id='". $_SESSION['user']."'";
										$rs=mysql_query($sql) or die(mysql_error());
										$result=mysql_fetch_array($rs);
									  echo  $massege;
									 }
								  ?>
								  </td>
								  </tr>
								<tr>
								  <td align="left" class="applytext">&nbsp;</td>
								  <td align="left" class="applytxtfieldpadding">&nbsp;</td>
		  </tr>
								<tr>
								  <td align="left" class="ContentText">User Name: </td>
								  <td align="left" class="ContentText"><? echo $result['username'] ?></td>
		  </tr>
									<tr>
                        <td align="left" class="ContentText">New Password: </td>
                      <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
                    <input name="newpass" type="password" class="textboxcss" id="newpass" value="" size="25">
                        </span></td></tr>
									 <tr>
                        <td align="left" class="ContentText">Repeat Password: </td>
                      <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
                    <input name="newpass1" type="password" class="textboxcss" id="newpass1" value="" size="25">
                        </span></td></tr>
						<tr>
						  <? if ($_SESSION['superadmin']=="Yes")
			{
			 ?>
                        <td align="left" class="ContentText">User  Type: </td>
                       <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
                       <select name="admintype" class="textboxcss" >
						<option value="No" selected="selected">Admin</option>
						<option value="Yes">Super Admin</option>
                         </select>
						                        </span></td></tr><? }?>
						<tr>
                        <td align="left" class="applytext">&nbsp;</td>
                        <td align="left"><p class="submit"><input type="submit" name="Submit" onClick="return test();" value="Update" title="Submit"  class="bluebutton"  /></p></td>
          </tr>
					  </form>
						</table>
                </div>
            </td>
        </tr>
    </tbody></table>

                                                        </div>
                                                        &nbsp;</td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        <tr>
                            <td height="100">
                            </td>
                        </tr>
                    </tbody></table>
                    <!-- Table End For General Settings Menu -->
                </td>
            </tr>
            <tr>
                <td class="bottomcss" valign="middle" align="left" height="26">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td>
                                <img alt="" src="Default.aspx_files/bottomline.gif" width="1" height="23">
                            </td>
                            <td class="bottomcss" valign="middle" width="992" align="left">
                                <span>Copyright 2011 © # . All rights reserved. </span>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    </form>
</body></html>