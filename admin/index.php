<?php 
error_reporting(0); 
include('connection/config.php');
$Select_DataBase 	= 	mysql_select_db($Database);
if(!$Select_DataBase)
{
	$show_dblink = '<img src="images/images/bullet_icon.gif" />&nbsp; &nbsp;<a href="../installDB/index.php" title="Manage Factor">You are try to login first time, <br /> So Install Database Now</a>';

}
else
{
	$show_dblink='<input name="Submit" type="submit" class="buttoncss" id="button" value="LOGIN" />';
}

if($_REQUEST['msg']=='')
{
	$msg='';
}
else
{
$msg='<div class="redtext">'.$_REQUEST['msg'].'</div>'; 
}
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/messages.css" />
<script type="text/javascript" src="js/messages.js"></script>
<title>Google - Truth Discovery On Web Admin Panel</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<!-- Save for Web Styles (Untitled-1) -->
<style type="text/css">
<!--
a { color:#FC0; font-weight:700}
#Table_01 {
	position:relative;
	left:0px;
	top:0px;
	width:430px;
	height:272px;
}

#Slice {
	position:absolute;
	left:0px;
	top:0px;
	width:3px;
	height:122px;
}

#Slice002 {
	position:absolute;
	left:3px;
	top:0px;
	width:365px;
	height:120px;
}

#Slice003 {
	position:absolute;
	left:368px;
	top:0px;
	width:62px;
	height:1px;
}

#Slice004 {
	position:absolute;
	left:368px;
	top:1px;
	width:1px;
	height:120px;
}

#Slice005 {
	position:absolute;
	left:369px;
	top:1px;
	width:59px;
	height:269px;
}

#Slice006 {
	position:absolute;
	left:428px;
	top:1px;
	width:2px;
	height:271px;
}

#Slice007 {
	position:absolute;
	left:3px;
	top:120px;
	width:37px;
	height:2px;
}

#Slice008 {
	position:absolute;
	left:40px;
	top:120px;
	width:136px;
	height:2px;
}

#Slice009 {
	position:absolute;
	left:176px;
	top:120px;
	width:192px;
	height:1px;
}

#Slice010 {
	position:absolute;
	left:176px;
	top:121px;
	width:193px;
	height:27px;
}

#Slice011 {
	position:absolute;
	left:0px;
	top:122px;
	width:1px;
	height:150px;
}

#Slice012 {
	position:absolute;
	left:1px;
	top:122px;
	width:41px;
	height:149px;
}

#Slice013 {
	position:absolute;
	left:42px;
	top:122px;
	width:134px;
	height:26px;
}

#Slice014 {
	position:absolute;
	left:42px;
	top:148px;
	width:327px;
	height:12px;
}

#Slice015 {
	position:absolute;
	left:42px;
	top:160px;
	width:1px;
	height:112px;
}

#Slice016 {
	position:absolute;
	left:43px;
	top:160px;
	width:132px;
	height:28px;
}

#Slice017 {
	position:absolute;
	left:175px;
	top:160px;
	width:194px;
	height:27px;
}

#Slice018 {
	position:absolute;
	left:175px;
	top:187px;
	width:1px;
	height:1px;
}

#Slice019 {
	position:absolute;
	left:176px;
	top:187px;
	width:193px;
	height:3px;
}

#Slice020 {
	position:absolute;
	left:43px;
	top:188px;
	width:133px;
	height:2px;
}

#Slice021 {
	position:absolute;
	left:43px;
	top:190px;
	width:3px;
	height:82px;
}

#Slice022 {
	position:absolute;
	left:46px;
	top:190px;
	width:321px;
	height:80px;
}

#Slice023 {
	position:absolute;
	left:367px;
	top:190px;
	width:2px;
	height:82px;
}

#Slice024 {
	position:absolute;
	left:46px;
	top:270px;
	width:321px;
	height:2px;
}

#Slice025 {
	position:absolute;
	left:369px;
	top:270px;
	width:59px;
	height:2px;
}

#Slice026 {
	position:absolute;
	left:1px;
	top:271px;
	width:41px;
	height:1px;
}
#button{ float:right}

.redtext{
  padding:10px; color:#C03; background:#FCB9B6; text-align:center; font-size:16px; font-weight:700; border:2px solid #C03;
position:absolute; top:0; left:0; margin:5px; width:97%}
-->
</style>
<!-- End Save for Web Styles -->
</head>
<body style="background:#FFF; margin-top:100px">
<?php echo $msg;  ?>
<!-- Save for Web Slices (Untitled-1) -->
<center>
<form id="form1" name="form1" method="post" action="logincheck.php" onsubmit="return validate(this)">
<div id="Table_01">
	<div id="Slice">
		<img src="images/images/Slice.png" width="3" height="122" alt="" />
	</div>
	<div id="Slice002">
		<img src="images/images/Slice-02.png" width="365" height="120" alt="" />
	</div>
	<div id="Slice003">
		<img src="images/images/Slice-03.png" width="62" height="1" alt="" />
	</div>
	<div id="Slice004">
		<img src="images/images/Slice-04.png" width="1" height="120" alt="" />
	</div>
	<div id="Slice005">
		<img src="images/images/Slice-05.png" width="59" height="269" alt="" />
	</div>
	<div id="Slice006">
		<img src="images/images/Slice-06.png" width="2" height="271" alt="" />
	</div>
	<div id="Slice007">
		<img src="images/images/Slice-07.png" width="37" height="2" alt="" />
	</div>
	<div id="Slice008">
		<img src="images/images/Slice-08.png" width="136" height="2" alt="" />
	</div>
	<div id="Slice009">
		<img src="images/images/Slice-09.png" width="192" height="1" alt="" />
	</div>
	<div id="Slice010">
		<input name="username" type="text"   id="username" style="width:193px;height:27px; border:0" />
	</div>
	<div id="Slice011">
		<img src="images/images/Slice-11.png" width="1" height="150" alt="" />
	</div>
	<div id="Slice012">
		<img src="images/images/Slice-12.png" width="41" height="149" alt="" />
	</div>
	<div id="Slice013">
		<img src="images/images/Slice-13.png" width="134" height="26" alt="" />
	</div>
	<div id="Slice014">
		<img src="images/images/Slice-14.png" width="327" height="12" alt="" />
	</div>
	<div id="Slice015">
		<img src="images/images/Slice-15.png" width="1" height="112" alt="" />
	</div>
	<div id="Slice016">
		<img src="images/images/Slice-16.png" width="132" height="28" alt="" />
	</div>
	<div id="Slice017">
		<input name="password" type="password"  id="password" style="width:193px; height:27px; border:0"/>
	</div>
	<div id="Slice018">
		<img src="images/images/Slice-18.png" width="1" height="1" alt="" />
	</div>
	<div id="Slice019">
		<img src="images/images/Slice-19.png" width="193" height="3" alt="" />
	</div>
	<div id="Slice020">
		<img src="images/images/Slice-20.png" width="133" height="2" alt="" />
	</div>
	<div id="Slice021">
		<img src="images/images/Slice-21.png" width="3" height="82" alt="" />
	</div>
	<div id="Slice022" style="background:url(images/images/Slice.jpg) no-repeat;width:321px;height:80;">
		
        <?php echo $show_dblink;?>
	</div>
	<div id="Slice023">
		<img src="images/images/Slice-23.png" width="2" height="82" alt="" />
	</div>
	<div id="Slice024">
		<img src="images/images/Slice-24.png" width="321" height="2" alt="" />
	</div>
	<div id="Slice025">
		<img src="images/images/Slice-25.png" width="59" height="2" alt="" />
	</div>
	<div id="Slice026">
		<img src="images/images/Slice-26.png" width="41" height="1" alt="" />
	</div>
</div>
</form>
</center>
<!-- End Save for Web Slices -->
</body>
</html>