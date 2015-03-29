<table width="100%" border="0" cellpadding="0" cellspacing="0" id="left_panel">
<tbody>
<tr>
	<td class="leftpanelheadercss" valign="middle" align="left">
		 General Settings
	</td>
</tr>
<tr>
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="welcome.php" title="Home Page"> Home Page</a>
		</div>
	</td>
</tr>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<!-- Table Row For Manage Category -->
<tr id="ctl00_trSiteSetting">
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="manageadmin.php" title="Manage Admin"> Manage Admin</a>
		</div>
	</td>
</tr>
<tr id="ctl00_trSiteSetting1">
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<? if ($_SESSION['superadmin']=="Yes")
			{
			 ?>
<tr>
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="newadminuser.php" title="Add User"> Add User</a>
		</div>
	</td>
</tr>
<? }?>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr>
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="logout.php" title="Click To Logout"> Logout</a>
		</div>
	</td>
</tr>
<!-- Last Lines For General Settings -->
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr>
	<td valign="middle" align="left">&nbsp;
		
	</td>
</tr>
<tr id="ctl00_truseraccounts1">
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr id="ctl00_truseraccounts2">
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<!-- Site Sections Starts -->
<tr id="ctl00_trsitesection">
	<td class="leftpanelheadercss" valign="middle" align="left">
		 Site Admin
	</td>
</tr>
<!-- Table Row For Language -->
<? if ($_SESSION['superadmin']=="Yes")
			{
			 ?>
<tr id="ctl00_trLanguage">
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="managefactor.php" title="Manage Factor"> Manage Factor</a>
		</div>
	</td>
</tr>
<?php } 
  else
  {
  }
  ?>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr id="ctl00_trLanguage">
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="trustworthy_cheker.php" title="Trustworthy Checker"> Trustworthy Checker</a>
		</div>
	</td>
</tr>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr id="ctl00_trLanguage">
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="archive.php" title="Archieve"> Search Archive</a>
		</div>
	</td>
</tr>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr>
	<td valign="middle" align="left">&nbsp;
		
	</td>
</tr>
<tr id="ctl00_trsitesection">
	<td class="leftpanelheadercss" valign="middle" align="left">
		 DB Setting
	</td>
</tr>
<!-- Table Row For Language -->
<? if ($_SESSION['superadmin']=="Yes")
			{
			 ?>
<tr id="ctl00_trLanguage">
	<td valign="middle" align="left" height="22">
		<div class="paddingleft10" align="left">
			<strong><img src="images/bullet_icon.gif"/></strong><a class="leftpanellinkcss" href="Truncate-Table.php" title="Manage Factor"> Truncate Table</a>
		</div>
	</td>
</tr>
<?php } 
  else
  {
  }
  ?>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr>
	<td class="leftpanelmiddleline" valign="top" align="left">
	</td>
</tr>
<tr>
	<td valign="middle" align="left">&nbsp;
		
	</td>
</tr>
</tbody>
</table>