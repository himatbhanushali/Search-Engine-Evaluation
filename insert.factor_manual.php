<?php 
include('connection/config.php');
include('Class.Fetch.info.php');

$auto_save = $_REQUEST['url'];
//$index = $_REQUEST['index'];




	$sitehost             = ( get_tld_from_url($auto_save) ) ? get_tld_from_url($auto_save) : $_SERVER[ 'HTTP_HOST' ];
	
	$url                  = $sitehost;
	$sitedomain           = getDomainName( $sitehost );
	$page_title           = getPageTitle( $sitehost );
	//$page_title			  = strip_tags($google_table_result['title']);
	$meta_keywords        = getMetaKeyword( $sitehost );
	$meta_description     = getMetaDescription( $sitehost );
	//$meta_description     = strip_tags($google_table_result['description']);
	$last_modified        = getLastModified( $sitehost );
	$google_page_rank     = getGooglePageRank( $sitehost );
	$google_indexed_pages = getGooglePages( $sitehost );
	$google_inbound_links = getGoogleLinks( $sitehost );
	$yahoo_indexed_pages  = getYahooPages( $sitehost );
	$yahoo_inbound_links  = getYahooLinks( $sitehost );
	$bing_indexed_pages   = getBingPages( $sitehost );
	$bing_inbound_links   = getBingLinks( $sitehost );
	$ask_indexed_pages    = getAskPages( $sitehost );
	$alexa_rank           = getAlexaRank( $sitedomain );
	$alexa_inbound_links  = getAlexaLinks( $sitedomain );
	$dmoz_listing         = getDMOZListings( $sitedomain );
	$site_advisor_rating  = getSiteAdvisorRating( $sitedomain );
	$wot_rating           = getWOTRating(getShortUrl( $sitehost ));
	$domain_age           = getDomainAge( $sitedomain );
	$date    			  = date("F j, Y, g:i a");
	
	
	/*Removing Special Character Here*/
	
	$page_title = sprintf("%s",mysql_real_escape_string($page_title));
	$page_title = strtolower($page_title);
	$meta_keywords = sprintf("%s",mysql_real_escape_string($meta_keywords));
	$meta_keywords = strtolower($meta_keywords);
	$meta_description = sprintf("%s",mysql_real_escape_string($meta_description));
	$meta_description = strtolower($meta_description);
	/*Declaring all actual score column here*/
	
	$page_title_actual_score='';
	$meta_keywords_actual_score='';
	$meta_description_actual_score='';
	$last_modified_actual_score='';
	$google_page_rank_actual_score='';
	$google_indexed_pages_actual_score='';
	$google_inbound_links_actual_score='';
	$yahoo_indexed_pages_actual_score='';
	$yahoo_inbound_links_actual_score='';
	$bing_indexed_pages_actual_score='';
	$bing_inbound_links_actual_score='';
	$ask_indexed_pages_actual_score='';
	$alexa_rank_actual_score='';
	$alexa_inbound_links_actual_score='';
	$dmoz_listing_actual_score='';
	$site_advisor_rating_actual_score='';
	$wot_rating_actual_score='';
	$domain_age_actual_score='';
	
	/*Declaring all actual score column Close here*/
	
	/*Selecting Score From Factor Table*/
	$result				  = mysql_fetch_array(mysql_query('SELECT * FROM factor where id=1')) or die(mysql_error());
	
	$page_title_score	  = $result['PageTitle'];
	$meta_keywords_score  = $result['MetaKeywords'];
	$meta_description_score = $result['MetaDescription'];
	$last_modified_score	= $result['Lastmodifieddateforpage'];
	$google_page_rank_score = $result['GooglePagerank'];
	$google_indexed_pages_score = $result['google_indexed_pages'];
	$google_inbound_links_score = $result['GoogleInboundLinks'];
	$yahoo_indexed_pages_score = $result['yahoo_indexed_pages'];
	$yahoo_inbound_links_score = $result['YahooInboundLinks'];
	$bing_indexed_pages_score = $result['bing_indexed_pages'];
	$bing_inbound_links_score = $result['bing_inbound_links'];
	$ask_indexed_pages_score = $result['ask_indexed_pages'];
	$alexa_rank_score = $result['AlexaRank'];
	$alexa_inbound_links_score = $result['alexa_inbound_links'];
	$dmoz_listing_score = $result['dmoz_listing'];
	$site_advisor_rating_score = $result['site_advisor_rating'];
	$wot_rating_score = $result['wot_rating'];
	$domain_age_score = $result['DomainAge'];
	/*Close Here*/
	
	/*Fetching Randum ID from archieve table starts here*/
	
	$Previous_Rand_Num_String = "SELECT * FROM archieve ORDER BY id DESC LIMIT 1";
	$Previous_Rand_Num_Run = mysql_query($Previous_Rand_Num_String); 
	$Previous_Rand_Num_Result = mysql_fetch_array($Previous_Rand_Num_Run);
	
	$rand_id 	=	$Previous_Rand_Num_Result['rand_id'];
	
	/*Fetching Randum ID from archieve table close here*/
	
	/*Testing Factor Condition Starts*/
	
	include('functions.php');
	/*Testing Factor Condition Close*/
	
	/*Here Saving The Factor Result And Corresponding Score*/
	$insert               = "INSERT INTO trustworthy_result SET 
	url='$url',
	rand_id='$rand_id',
	page_title='$page_title',
	page_title_score='$page_title_score',
	page_title_actual_score='$page_title_actual_score',
	meta_keywords='$meta_keywords',
	meta_keywords_score='$meta_keywords_score',
	meta_keywords_actual_score='$meta_keywords_actual_score',
	meta_description='$meta_description',
	meta_description_score='$meta_description_score',
	meta_description_actual_score='$meta_description_actual_score',
	last_modified='$last_modified',
	last_modified_score='$last_modified_score',
	last_modified_actual_score='$last_modified_actual_score',
	google_page_rank='$google_page_rank',
	google_page_rank_score='$google_page_rank_score',
	google_page_rank_actual_score='$google_page_rank_actual_score',
	google_indexed_pages='$google_indexed_pages',
	google_indexed_pages_score='$google_indexed_pages_score',
	google_indexed_pages_actual_score='$google_indexed_pages_actual_score',
	google_inbound_links='$google_inbound_links',
	google_inbound_links_score='$google_inbound_links_score',
	google_inbound_links_actual_score='$google_inbound_links_actual_score',
	yahoo_indexed_pages='$yahoo_indexed_pages',
	yahoo_indexed_pages_score='$yahoo_indexed_pages_score',
	yahoo_indexed_pages_actual_score='$yahoo_indexed_pages_actual_score',
	yahoo_inbound_links='$yahoo_inbound_links',
	yahoo_inbound_links_score='$yahoo_inbound_links_score',
	yahoo_inbound_links_actual_score='$yahoo_inbound_links_actual_score',
	bing_indexed_pages='$bing_indexed_pages',
	bing_indexed_pages_score='$bing_indexed_pages_score',
	bing_indexed_pages_actual_score='$bing_indexed_pages_actual_score',
	bing_inbound_links='$bing_inbound_links',
	bing_inbound_links_score='$bing_inbound_links_score',
	bing_inbound_links_actual_score='$bing_inbound_links_actual_score',
	ask_indexed_pages='$ask_indexed_pages',
	ask_indexed_pages_score='$ask_indexed_pages_score',
	ask_indexed_pages_actual_score='$ask_indexed_pages_actual_score',
	alexa_rank='$alexa_rank',
	alexa_rank_score='$alexa_rank_score',
	alexa_rank_actual_score='$alexa_rank_actual_score',
	alexa_inbound_links='$alexa_inbound_links',
	alexa_inbound_links_score='$alexa_inbound_links_score',
	alexa_inbound_links_actual_score='$alexa_inbound_links_actual_score',
	dmoz_listing='$dmoz_listing',
	dmoz_listing_score='$dmoz_listing_score',
	dmoz_listing_actual_score='$dmoz_listing_actual_score',
	site_advisor_rating='$site_advisor_rating',
	site_advisor_rating_score='$site_advisor_rating_score',
	site_advisor_rating_actual_score='$site_advisor_rating_actual_score',
	wot_rating='$wot_rating',
	wot_rating_score='$wot_rating_score',
	wot_rating_actual_score='$wot_rating_actual_score',
	domain_age='$domain_age',
	domain_age_score='$domain_age_score',
	domain_age_actual_score='$domain_age_actual_score',
	total_score='$total_score',
	date='$date'";
	
	$chk = mysql_query( $insert ) or die( mysql_error() );

$msg = "No Inforfomation Found: Error";

if(!empty($chk))
{
	$msg =  "green";
	}
else
{
	$msg = "#BE5858";
}

echo $msg;
mysql_close( $Connection );
?>