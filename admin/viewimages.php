<?
include('connection/config.php');
 
		$id=$_REQUEST['id'];
		//echo $id;
		$ins="SELECT * FROM   clients  where id='".$id."'";
		$result=mysql_query($ins);
		$row=mysql_fetch_array($result);
		
		
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..::Admin Control Panel::..</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/admin.css" rel="stylesheet" type="text/css" />


<link href="css/estatestyle1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="900" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td height="191"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30" align="right" valign="middle" bordercolor="#999999"><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" background="images/MENUBG.jpg">
          
        </table></td>
      </tr>
      <tr>
        <td height="111" align="right" valign="top"><table width="100%" height="250" border="0" align="center" cellpadding="3" cellspacing="3">
		 
		  
        <tr>
            <td align="center" valign="top">
			<br />
			<div style="width:850px;">
			<? if($row['clientlogo']!='')
		    { 
		 
		    ?>
			<div align="left" style="float:left; width:200px; text-align:center;"><img src="../clientlogo/<? echo $row['clientlogo']; ?>" class="tableBorder" /><br />
			
			
            </div>
			<? }
		  else
		  {?>
		  <div align="left">No Image Available</div>
			<? 
			}
		     ?>
			 </div>
		  </td>
            </tr>
			
		 
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>