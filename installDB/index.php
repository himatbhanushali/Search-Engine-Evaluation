<?php
include('connection/config.php');

if (mysql_query("CREATE DATABASE IF NOT EXISTS {$Database}",$Connection))
  {
  $Select_DataBase 	= 	mysql_select_db($Database);  
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// --Table structure for table `adminuser`
$Create_Table_Query = "CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `superadmin` varchar(255) NOT NULL DEFAULT 'No',
  `lastlogin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());



// -- Table structure for table `factor`
$Create_Table_Query = "CREATE TABLE IF NOT EXISTS `factor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PageTitle` int(3) NOT NULL,
  `MetaKeywords` int(3) NOT NULL,
  `MetaDescription` int(3) NOT NULL,
  `AlexaRank` int(3) NOT NULL,
  `GooglePagerank` int(3) NOT NULL,
  `GoogleInboundLinks` int(3) NOT NULL,
  `YahooInboundLinks` int(3) NOT NULL,
  `google_indexed_pages` int(3) NOT NULL,
  `yahoo_indexed_pages` int(3) NOT NULL,
  `DomainAge` int(3) NOT NULL,
  `wot_rating` int(3) NOT NULL,
  `Lastmodifieddateforpage` int(3) NOT NULL,
  `alexa_inbound_links` int(3) NOT NULL,
  `dmoz_listing` int(3) NOT NULL,
  `site_advisor_rating` int(3) NOT NULL,
  `bing_indexed_pages` int(3) NOT NULL,
  `bing_inbound_links` int(3) NOT NULL,
  `ask_indexed_pages` int(3) NOT NULL,
  PRIMARY KEY (`id`)
)" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());

//--Table structure for table `archieve`

$Create_Table_Query = "CREATE TABLE IF NOT EXISTS `archieve`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`keyword` varchar(1055) NOT NULL,
`rand_id` bigint(20) NOT NULL,
`date` varchar(55) NOT NULL,
PRIMARY KEY (`id`)
)
";
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());


// -- Table structure for table `trustworthy_result`
$Create_Table_Query = "CREATE TABLE IF NOT EXISTS `trustworthy_result` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(1055) NOT NULL,
  `rand_id` bigint(20) NOT NULL,
  `page_title` varchar(1055) NOT NULL,
  `page_title_score` int(3) NOT NULL,
  `page_title_actual_score` float NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_keywords_score` int(3) NOT NULL,
  `meta_keywords_actual_score` float NOT NULL,
  `meta_description` text NOT NULL,
  `meta_description_score` int(3) NOT NULL,
  `meta_description_actual_score` float NOT NULL,
  `last_modified` varchar(255) NOT NULL,
  `last_modified_score` int(3) NOT NULL,
  `last_modified_actual_score` float NOT NULL,
  `google_page_rank` varchar(255) NOT NULL,
  `google_page_rank_score` int(3) NOT NULL,
  `google_page_rank_actual_score` float NOT NULL,
  `google_indexed_pages` varchar(255) NOT NULL,
  `google_indexed_pages_score` int(3) NOT NULL,
  `google_indexed_pages_actual_score` float NOT NULL,
  `google_inbound_links` varchar(255) NOT NULL,
  `google_inbound_links_score` int(3) NOT NULL,
  `google_inbound_links_actual_score` float NOT NULL,
  `yahoo_indexed_pages` varchar(255) NOT NULL,
  `yahoo_indexed_pages_score` int(3) NOT NULL,
  `yahoo_indexed_pages_actual_score` float NOT NULL,
  `yahoo_inbound_links` varchar(255) NOT NULL,
  `yahoo_inbound_links_score` int(3) NOT NULL,
  `yahoo_inbound_links_actual_score` float NOT NULL,
  `bing_indexed_pages` varchar(255) NOT NULL,
  `bing_indexed_pages_score` int(3) NOT NULL,
  `bing_indexed_pages_actual_score` float NOT NULL,
  `bing_inbound_links` varchar(255) NOT NULL,
  `bing_inbound_links_score` int(3) NOT NULL,
  `bing_inbound_links_actual_score` float NOT NULL,
  `ask_indexed_pages` varchar(255) NOT NULL,
  `ask_indexed_pages_score` int(3) NOT NULL,
  `ask_indexed_pages_actual_score` float NOT NULL,
  `alexa_rank` varchar(255) NOT NULL,
  `alexa_rank_score` int(3) NOT NULL,
  `alexa_rank_actual_score` float NOT NULL,
  `alexa_inbound_links` varchar(255) NOT NULL,
  `alexa_inbound_links_score` int(3) NOT NULL,
  `alexa_inbound_links_actual_score` float NOT NULL,
  `dmoz_listing` varchar(255) NOT NULL,
  `dmoz_listing_score` int(3) NOT NULL,
  `dmoz_listing_actual_score` float NOT NULL,
  `site_advisor_rating` varchar(255) NOT NULL,
  `site_advisor_rating_score` int(3) NOT NULL,
  `site_advisor_rating_actual_score` float NOT NULL,
  `wot_rating` varchar(255) NOT NULL,
  `wot_rating_score` int(3) NOT NULL,
  `wot_rating_actual_score` float NOT NULL,
  `domain_age` varchar(255) NOT NULL,
  `domain_age_score` int(3) NOT NULL,
  `domain_age_actual_score` float NOT NULL,
  `total_score` double NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`uid`)
)" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());

// -- Table structure for table `google_result`
/*$Create_Table_Query = "CREATE TABLE IF NOT EXISTS `temp_google_result` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(1055) NOT NULL,
  `rand_id` bigint(20) NOT NULL,
  `title` varchar(1055) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(1055) NOT NULL,
  `realurl` varchar(1055) NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`uid`)
)" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());*/

// -- Table structure for table `google_result`
$Create_Table_Query = "CREATE TABLE IF NOT EXISTS `google_result` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(1055) NOT NULL,
  `rand_id` bigint(20) NOT NULL,
  `title` varchar(1055) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(1055) NOT NULL,
  `realurl` varchar(1055) NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`uid`)
)" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());


// -- Table structure for table `trustworthy_url`
$Create_Table_Query = "CREATE TABLE IF NOT EXISTS `trustworthy_url` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(1055) NOT NULL,
  `url` varchar(1055) NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`uid`)
)" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());


// -- Dumping data for table `adminuser`
$Create_Table_Query = "INSERT INTO `adminuser` (`id`, `username`, `password`, `superadmin`, `lastlogin`) VALUES
(1, 'admin', 'admin', 'Yes', 'February 8, 2011, 4:11 pm'),
(3, 'ashwani', 'ashwani12', 'No', 'March 3, 2010, 1:15 pm');" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());


// -- Dumping data for table `factor`
$Create_Table_Query = "INSERT INTO `factor` (`id`, `PageTitle`, `MetaKeywords`, `MetaDescription`, `AlexaRank`, `GooglePagerank`, `GoogleInboundLinks`, `YahooInboundLinks`, `google_indexed_pages`, `yahoo_indexed_pages`, `DomainAge`, `wot_rating`, `Lastmodifieddateforpage`, `alexa_inbound_links`, `dmoz_listing`, `site_advisor_rating`, `bing_indexed_pages`, `bing_inbound_links`, `ask_indexed_pages`) VALUES
(1,5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 10, 5, 5, 5, 10, 5, 5, 5)" ;
$Run_Table_Query = mysql_query($Create_Table_Query) or die(mysql_error());


echo "Database and Table Created Sucessfully!";
header('Location:../admin/index.php');
mysql_close($Connection);
?>
 