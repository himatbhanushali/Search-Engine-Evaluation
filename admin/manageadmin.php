<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


<title>
	:: Manage Admin ::
</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">

   <?php include("head.php"); ?>
<? include("pear/PEAR.php");
include("pear/Pager/Pager.php");
include("ez_sql.php");

			if(isset($_REQUEST['action']))
			{
			  $id=$_REQUEST['val'];
				$query="delete from adminuser where id='$id'";
				$result=mysql_query($query) or die("select query not run");
			}
			$sh=$_REQUEST['sh'];
		//$_SESSION['exp']='';
		$query=$_REQUEST['query'];
		 $_SESSION['exp']='';
?>
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

function checkdel(d)
{
	var checkdel=confirm("Are you sure to delete?");
		if(!checkdel)
			{
			  return false;
			}
		else
			{
				document.location.href="manageadmin.php?val="+d+"&action=del";
			}
}
</script>

</head><body>

<div>

</div>

        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
                <td colspan="2">
                    <? include_once("head.php");?>
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
                    <strong>Manage Admin</strong></div>
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
                          
<table width="600" border="0"  align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td height="299" align="center" valign="top">
	<? if ($_SESSION['superadmin']=="Yes")
			{
			 ?>
	<table width="100%" border="0" cellspacing="3" cellpadding="3">
          
         
		  <?
		   $qry ='select * from adminuser order by id desc';	  
		   //echo $qry;
				$news_result=$db->get_results($qry, array_a);
		        
				
				 //print_r($_SESSION['exp']);
				 //exit();
				$params = array('mode'=>'jumping', // TWO MODES  CAN BE SET SLIDING OR JUMPING
										'httpMethod'=> 'GET',
										'append'=> true,
										'fileName' => '%d', 
										/*'extraVars' => array(
		       							'id'  => $_REQUEST['cid']), // Extra variable needed in URL*/
										'perPage'    => 50, // Records Per Page
										'prevImg'    => "Previous",
										'nextImg'    => "Next",
										'spacesAfterSeparator' => 5, 
										'curPageLinkClassName' => "sel",
										'delta'      => 5,
										'itemData'   =>$news_result);


		$pager = &Pager::factory($params);	
		$paging_results  = $pager->getPageData(); // To get the limited Data
		$links = $pager->getLinks(); // To get the links	
		
		$cnt=1;
		if ($paging_results) { ?>
          <tr>
            <td>
			  
			
			<table width="780" border="0" align="center" cellpadding="3" cellspacing="2"  class="leftpanelheadercss">
			
			
              <tr class="label">
                <td width="20%" align="left" valign="middle"  >User Name</td>
				<td width="19%" align="left" valign="middle" >User Password</td>
				<td width="14%" align="left" valign="middle"  >Super Admin </td>
				<td width="22%" align="center" valign="middle"  >Last Login</td>
                <td align="center" valign="middle"   >Reset Password</td>
				                <td align="center" valign="middle" >Delete</td>
              </tr>
			  <?
		foreach($paging_results as $row) {
		$pageID = $_REQUEST['pageID'];
		if($pageID=='')
		{
			$pageID= '1';
		}
		//echo $id = $row['id'];
		
				//$db->debug();
				
		 // $qry;
//$rs_aboutus = mysql_query($qry);

//while($data_aboutus = mysql_fetch_array($rs_aboutus))


                                                                                                     
                                                                                                  

	
			 $g=$row['id'];
			  
			?>
              <tr class="leftpanelheadertextcss"  >
                <td align="left" valign="middle" ><? echo $row['username']?></td>
				<td align="left" valign="middle" ><? echo $row['password']?></td>
				<td align="left" valign="middle" ><? echo $row['superadmin']?></td>
				<td align="left" valign="middle" ><? echo $row['lastlogin']?></td>
               <td width="17%" align="center" valign="middle" ><input type="hidden" name="id" value="<? echo $g;?>">
   <a href="adminedit.php?id=<? echo $g; ?>"><img src="images/edit.gif" alt="edit author"  border="0"> </a></td>
                <td width="8%" align="center" valign="middle"  class="btn1"  ><img src="images/delete.jpg" alt="delete author"  border="0" style="cursor:pointer;" onClick="return checkdel('<? echo $g;?>');"> </td>
              </tr>
			  <? $cnt=$cnt+1;
                  }?>
            </table>			</td>
</tr>
          <tr>
            <td><?php echo $pager->links; ?></td>
          </tr>
		  


<?php }else{?>
<tr>
    <td height="20" align="center" class="leftpanelheadertextcss">No Record Found</td>
  </tr>
  <?php }?>
        </table>
		<?php
		}
		else
		{?>
		<table width="700" border="0" align="center" cellpadding="3" cellspacing="2" bordercolor="#CCCCCC" class="leftpanelheadercss">
			
			
<tr class="label">
                <td width="21%" >User Name</td>
		  <td width="22%"  >User Password</td>
		  <td width="22%" >Super Admin </td>
          <td   >Reset Password</td>
              
          </tr>
			  <?
				$query="select * from  adminuser where id='".$_SESSION['id']."'  ";
 	 			$result=mysql_query ($query) or die(mysql_error());    
				$row=mysql_fetch_array($result);                                                   
                                                                                                  

	
			 $g=$row['id'];
			  
			?>
              <tr class="leftpanelheadertextcss">
                <td bgcolor="#FFFFFF"><? echo $row['username']?></td>
				<td bgcolor="#FFFFFF"><? echo $row['password']?></td>
				<td bgcolor="#FFFFFF"><? echo $row['superadmin']?></td>
               <td width="25%" align="center" bgcolor="#FFFFFF"><input type="hidden" name="id" value="<? echo $g;?>">
   <a href="adminedit.php?id=<? echo $g; ?>"><img src="images/edit.gif" alt="edit author"  border="0"> </a></td>
                
          </tr>
			 
            </table>
<? } ?>
		</td>
  </tr>
</table>

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
    
</body></html>