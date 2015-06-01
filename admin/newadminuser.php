<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


<title>
	:: Add User  ::
</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">

    <script language="javascript">
function test()
	{
	if(document.form1.newuser.value=='')
	{
	alert("Error:Enter User Name!!");
	document.form1.newuser.focus();
			   return false;
	}	
	
	if(document.form1.newpass.value=='')
	{
	alert("Error:Enter New Password!!");
	document.form1.newpass.value='';
	document.form1.newpass.focus();
			   return false;
	}
	if(document.form1.newpass.value!=document.form1.newpass1.value)
	{
	alert("Error:Enter not mathch try again!!");
	document.form1.newpass.value="";
	document.form1.newpass1.value="";
	document.form1.newpass.focus();
			   return false;
	}	
	
  

	
	 }
</script>
</head><body>
       <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="2" >
                    <? include_once("head.php"); ?>
					<?
					 if($_SESSION['superadmin']=="No")
						{
						$_SESSION['username']="";
						echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=index.php">';
						exit;
						}
					if(isset($_REQUEST['Submit'])){
							$newname=$_REQUEST['newuser'];
							//  $id="1";
							$newpass=$_REQUEST['newpass'];
							 $admintype=$_REQUEST['admintype'];
							 $date=addslashes(date("F j, Y, g:i a"));
							$query="insert into adminuser  set password='$newpass',username='$newname',superadmin='$admintype',lastlogin='$date' ";
						
							$result=mysql_query ($query) or die(mysql_error()); 
							$massege="New Admin User Create Sucessfully";
							}
					?>
                </td>
            </tr>
          
                <td class="middlepartcss" colspan="2" valign="middle" align="center">
                    <!-- Table Start For General Settings Menu -->
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    
                            <td valign="top" width="220" align="left">
                                <? include_once("leftpanel.php"); ?> 
                            </td>
                            <td valign="top" align="right">
                                <!--Table For Content Place Holder -->
                                <table width="99%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td class="loginboxcss" valign="top" align="left" height="300">
                                            
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                <tbody><tr>
                                                    <td class="NormalText" valign="top">
                                                        <div>
                                                            
    <table width="99%" border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td valign="top" align="left">
                <div class="rightpanelheadingcss" align="left">
                    <strong>Add User </strong></div>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="left" height="5">
            </td>
        </tr>
        <tr>
            <td class="loginboxcss" valign="top" align="left" height="300">
                <div align="left">
                
               <table width="500" align="center"  >
<form method="post" action="newadminuser.php?action=submit"  name="form1" id="form1" enctype="multipart/form-data">
                <tr>
                  <td colspan="2" align="left" valign="bottom" class="rightpanelheadingcss"><strong>New Admin Login Info</strong></td>
          </tr>
                <tr>
                  <td colspan="2" align="left" ><? echo $massege;?></td>
          </tr>
                <tr>
                  <td align="left" class="applytext">&nbsp;</td>
                  <td align="left" class="applytxtfieldpadding">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" class="ContentText" >User Name : </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
              <input name="newuser" type="text" class="textboxcss" id="newuser" value="" size="25" />
                    
                  </span></td>
          </tr>
                <tr>
                  <td align="left" class="ContentText" >New Password: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
              <input name="newpass" type="password" class="textboxcss" id="newpass" value="" size="25" />
                  </span></td>
          </tr>
                <tr>
                  <td align="left" class="ContentText">Repeat Password: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
              <input name="newpass1" type="password" class="textboxcss" id="newpass1" value="" size="25" />
                  </span></td>
          </tr>
                <tr>
                  <td align="left" class="ContentText" >User Type: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
            <select name="admintype" class="textboxcss" >
                      <option value="No" selected="selected">Admin</option>
                      <option value="Yes">Super Admin</option>
                    </select>
                  </span></td>
          </tr>
                <tr>
                  <td align="left" class="applytext">&nbsp;</td>
                  <td align="left"><p class="submit">
                    <input type="submit" name="Submit" onclick="return test();" value="Create" title="Submit" class="bluebutton" />
                  </p></td>
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
                                <img alt="" src="images/bottomline.gif" width="1" height="23">
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