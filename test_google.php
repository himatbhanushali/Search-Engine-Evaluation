<?php include_once("Class_Domain.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Google Test</title>
<style>
body { font-size:11px; font-family:Verdana, Geneva, sans-serif;}
</style>
</head>

<body>
<form method="post" action="">
 <fieldset id="wf_AdsenseProfitEsti">
  <legend>Domain Age Check</legend>
  <span class="oneField">
  <label class="preField">Domain (example.com - No www!)</label>
  <input type="text" value="" name="query">
  <br>
  </span>
  <input type="hidden" value="cdt" name="output">
 </fieldset>
 <div class="actions">
  <input type="submit" value="submit" id="submit" name="submit" class="primaryAction">
 </div>
</form>
</body>
</html>
<?php 
$Domain = new Domain();
 
if(isset($_POST['submit']))
{
$domain = $_POST['query']; 
$Domain->getmetadata($domain); 
?>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
 <tr valign="top">
  <td>Age</td>
  <td>:</td>
  <td><?php 
  $result = $Domain->whois($domain); 
  
    echo $result;

  ?></td>
 </tr>
 <tr valign="top">
  <td>Last Modify</td>
  <td>:</td>
  <td><?php 
echo $Domain->lastmodified($domain);;
  ?></td>
 </tr>
 </tr>
 <tr valign="top">
  <td>google_page_rank</td>
  <td>:</td>
  <td><?php 
echo $Domain->google_page_rank($domain);;
  ?></td>
 </tr> 
 <tr valign="top">
  <td>alexaRank</td>
  <td>:</td>
  <td><?php 
echo $Domain->alexaRank($domain);;
  ?></td>
 </tr> 
  <tr valign="top">
  <td>alexalinks</td>
  <td>:</td>
  <td><?php 
echo $Domain->getalexalinks($domain);;
  ?></td>
 </tr> 
<tr valign="top">
  <td>Title</td>
  <td>:</td>
  <td><?php 
    //get title	
echo $Domain->get_title();
  ?></td>
 </tr>
<tr valign="top">
  <td>Description</td>
  <td>:</td>
  <td><?php 
//get description
echo $Domain->get_description();
  ?></td>
 </tr>
<tr valign="top">
  <td>Keywords</td>
  <td>:</td>
  <td><?php 
//get description
echo $Domain->get_keywords();
  ?></td>
 </tr>
<tr valign="top">
  <td>Url</td>
  <td>:</td>
  <td><?php 
echo $domain;
  ?></td>
 </tr>
</table>
<?
}

?>