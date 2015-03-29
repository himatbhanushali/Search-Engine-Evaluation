<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
function remove_default()
{
	var getDefault = document.getElementById('sitehost').value;
	if(getDefault=='http://www.example.com/')
	{
		getDefault = "";
		return document.getElementById('sitehost').value = getDefault;
	}
}
</script>
<style>
ul li {
	margin:5px;
	border-bottom:1px dashed #39C;
	width:85%;
}
</style>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>:: Trustworthy Checker ::</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
</head>
<body>
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
			<tbody>
			<tr>
				<td class="loginboxcss" valign="top" align="left" height="300">
					<div align="left">
					</div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tbody>
					<tr>
						<td class="NormalText" valign="top">
							<div>
								<table width="99%" border="0" cellpadding="0" cellspacing="0">
								<tbody>
								<tr>
									<td valign="top" align="left">
										<div class="rightpanelheadingcss" align="left">
											<strong>Trustworthy Checker</strong>
										</div>
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
											<tbody>
											<tr>
												<td class="NormalText" valign="top">
													<p align="center">
														<strong>Welcome in Google - Truth Discovery On Web Admin</strong>
													</p>
													<div id="search_area" style="vertical-align:top">
														<!--Here Goes Factor Results-->
														<table>
														<tr>
															<td>
																Domain/Host Name:
															</td>
															 &nbsp;
															<td>
																<input type="text" name="sitehost" id="sitehost" size='30' maxlength='150' value="http://www.example.com/" onclick="return remove_default();">
															</td>
															<td>
																<input type="button" value="Grab Details" id="submit">
															</td>
															<td>
																<span id="wait" style="width:30px"></span>
															</td>
														</tr>
														</table>
														<table id="showinfo" border="1" cellspacing="1" cellpadding="1">
														</table>
														<script src="../js/jquery-1.4.4.min.js"></script>
														<script>
                        /* Here is Code for MYSQL Insert */
                        /*************************************/
                        $(document).ready(function() {
                            $("#submit").click(function() {
                                var sendurl = $("#sitehost").val();
                                //$("#showinfo").html('<tr><td>Please wait.. <img src = "../img/loading.gif"/></td></tr>');
                                $("#wait").html('<img src = "../img/loading.gif"/>');
								$.ajax({
                                    type: "POST",
                                    url: "../New.Class.Fetch.info.php",
                                    data: "sendurl=" + sendurl,
                                    success: function(status) {
                                        $("#showinfo").html(status);
										$("#wait").html('');
                                    }
                                });
                            });
                        });
                        /*************************************/
                        /* CLose Here*/
                        </script>
													</div>
													<!--Here Close Factor Results-->
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
							 &nbsp;
						</td>
					</tr>
					</tbody>
					</table>
				</td>
			</tr>
			</tbody>
			</table>
		</td>
	</tr>
	<tr>
		<td height="100">
		</td>
	</tr>
	</tbody>
	</table>
	<!-- Table End For General Settings Menu -->
</td>
</tr>
<tr>
<td class="bottomcss" valign="middle" align="left" height="26">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tbody>
	<tr>
		<td>
			<img alt="" src="Default.aspx_files/bottomline.gif" width="1" height="23">
		</td>
		<td class="bottomcss" valign="middle" width="992" align="left">
			<span>Copyright 2011 © # . All rights reserved. </span>
		</td>
	</tr>
	</tbody>
	</table>
</td>
</tr>
</tbody>
</table>
</form>
</body>
</html>