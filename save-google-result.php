<?php 
include('connection/config.php');
include('Class.Fetch.info.php');

/* Ist part = Save Goole Result in trustworthy_result*/
$Previous_Rand_Num_String = "SELECT * FROM archieve ORDER BY id DESC LIMIT 1";
$Previous_Rand_Num_Run = mysql_query($Previous_Rand_Num_String); 
$Previous_Rand_Num_Result = mysql_fetch_array($Previous_Rand_Num_Run);

$rand_id 	=	$Previous_Rand_Num_Result['rand_id'];
$keywords 	= 	$_REQUEST['keywords'];
$title		=	$_REQUEST['title'];
$desc		=	$_REQUEST['desc'];
$url		=	$_REQUEST['url'];
$realurl	=	$_REQUEST['realurl'];
$validurl	= 	get_tld_from_url($realurl);
$date    	= 	date("F j, Y, g:i a");



$insert   = sprintf("INSERT INTO google_result SET 
keywords 	= '%s',
rand_id 	= '%s', 
title 		= '%s',
description	= '%s', 
url 		= '%s',
realurl 	= '%s',
date	 	= '%s'", mysql_real_escape_string($keywords), mysql_real_escape_string($rand_id), mysql_real_escape_string($title), mysql_real_escape_string($desc), mysql_real_escape_string($url), mysql_real_escape_string($realurl), mysql_real_escape_string($date));

mysql_query($insert) or die(mysql_error());

/* IInd Part = Save valid url in trustworthy_url*/
$insert = sprintf("INSERT INTO trustworthy_url SET 
keywords 	= '%s', 
url 		= '%s',
date 		= '%s'", 
mysql_real_escape_string($keywords),
mysql_real_escape_string($validurl),
mysql_real_escape_string($date));

mysql_query($insert) or die(mysql_error());

$insert   = sprintf("INSERT INTO temp_google_result SET 
keywords 	= '%s',
rand_id 	= '%s', 
title 		= '%s',
description	= '%s', 
url 		= '%s',
realurl 	= '%s',
date	 	= '%s'", mysql_real_escape_string($keywords), mysql_real_escape_string($rand_id), mysql_real_escape_string($title), mysql_real_escape_string($desc), mysql_real_escape_string($url), mysql_real_escape_string($realurl), mysql_real_escape_string($date));

mysql_query($insert) or die(mysql_error());

mysql_close( $Connection );

echo $validurl;
//echo $realurl;
?>