<?php //include('connection/config.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>
	:: Archieve ::
</title><link href="css/admin.css" rel="stylesheet" type="text/css">
<script src="../js/jquery-1.4.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
<link href="../css/archive_trustworthy_result.css" rel="stylesheet" type="text/css" />
</head><body>

        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="2">
                    <? include_once("head.php"); ?>
                </td>
            </tr>
            <tr>
                <td class="middlepartcss" colspan="2" valign="middle" align="center">
                   
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      
                            <td valign="top" width="220" align="left">
                                <? include_once("leftpanel.php"); ?> 
                            </td>
                            <td valign="top" align="right">
                                <!--Table For Content Place Holder -->
                                <table width="99%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td class="loginboxcss" valign="top" align="left" height="300">
                                            <div align="left">
                                            </div>
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                <tbody><tr>
                                                    <td class="NormalText" valign="top">
                                                        <div>
                                                            
    <table width="99%" border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td valign="top" align="left">
                <div class="rightpanelheadingcss" align="left">
                    <strong>Archive Page</strong></div>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="left" height="5">
            </td>
        </tr>
        <tr>
            <td class="loginboxcss" valign="top" align="left" height="300">
                <div align="left">
                
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="NormalText" valign="top">                           
                            <p align="center"><strong>Welcome in Google - Truth Discovery On Web Admin</strong></p>
                            <!--<div id="search_area"><?php //include('search_for_admin.php');?></div>-->
                            <div>
                            <table cellpadding="0" cellspacing="10" border="0" width="100%">
                            <tr class="table_heading">
                            <th width="25%">Date</th>
                            <th width="55%">Keyword</th>
                            <th width="20%" align="center">View Result</th>
                            </tr>
                            <?php
							$query = mysql_query("SELECT * FROM archieve order by id desc") or die(mysql_error());
							 
							 while($result = mysql_fetch_array($query))
							{
							?>
                            <tr>
                            <td><?= $result['date'];?></td>
                            <td><?= $result['keyword'];?></td>
                           <td align="center"><a href="#" id="<?php echo $result['rand_id']; ?>" class="google_result" rel="<?php echo $result['rand_id']; ?>">Show</a></td>
                            </tr>
                            <?php }?>
                            </table>
                            </div>
                            <div id="show_results">
                            </div>
                            
                            <div id="show_trustworthy">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
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
    
<script language="javascript" type="text/javascript">
$(document).ready(function () {
    $(".google_result").click(function () {
		$("#left_panel").css("width",(230));
        var id = $(this).attr("rel");
        if ($(this).html() == "Hide") {
            $("#show_results").hide();
			$("#show_trustworthy").hide();			
			
            $("#" + id).html("Show");
        } else if($(this).html() == "Show") {
            result(id); trustworthy_result(id);
        }
    });
});
</script>
<script language="javascript" type="text/javascript">
function result(id) {
    $.ajax({
        type: "POST",
        url: "../new_google_result.php",
        data: "randid=" + id,
        success: function (retvalue) {
            $("#show_results").html(retvalue);
            $("#show_results").show();
			$("#" + id).html("Hide");
			
        }
    });
}
function trustworthy_result(id) {
    $.ajax({
        type: "POST",
        url: "../archieve_trustworthy_results.php",
        data: "randid=" + id,
        success: function (retvalue) {
            $("#show_trustworthy").html(retvalue);
            $("#show_trustworthy").show();
			$("#" + id).html("Hide");
        }
    });
}

</script>

</body></html>