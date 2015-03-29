<? error_reporting(0);
@ob_start();
@session_start();
include('connection/config.php');
	if(!isset($_SESSION['username']))
		{
			$_SESSION['username']="";
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=index.php">';
			exit;
		}
	elseif($_SESSION['username']=="")
		{
			$_SESSION['username']="";
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=index.php">';
			exit;
		}
	
	else
		{
		
		}
?>
<table class="toppartbg" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td valign="middle" width="51%" align="left">
                                <div class="paddingleft12" align="left">
                                    <strong>Truth Discovery On Web - Administrative Control Panel</strong></div>                            </td>
<td width="49%" align="right">
                                <div class="loggedpagerighttoptext" align="right">
                                    <span id="ctl00_lblUser">Logged in User :</span>
                                    <strong class="usertextcss">
                                        <span id="ctl00_LabelAdmin"><? echo $_SESSION['username']; ?> </span></strong>
                                    | <a href="logout.php" title="Click To Logout" style="font-family: arial,Verdana, Geneva, Arial, Helvetica, sans-serif !important;
	font-size: 13px !important;
	color: #FFFF99 !important;"><strong>
                                        logout</strong></a></div>                            </td>
                        </tr>
                         
                    </tbody></table>
