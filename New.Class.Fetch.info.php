<?php

/* php easy :: seo report script */
include('connection/config.php');
include('checker_functions.php');
include('Class.Fetch.info.php');


/* Trustworthy Checker Testing Here */

/* Selecting Score From Factor Table */
$result = mysql_fetch_array(mysql_query('SELECT * FROM factor where id=1')) or die(mysql_error());

$page_title_score = $result['PageTitle'];
$meta_keywords_score = $result['MetaKeywords'];
$meta_description_score = $result['MetaDescription'];
$last_modified_score = $result['Lastmodifieddateforpage'];
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
/* Close Here */

/* Declaring all actual score column here */

$page_title_actual_score = '';
$meta_keywords_actual_score = '';
$meta_description_actual_score = '';
$last_modified_actual_score = '';
$google_page_rank_actual_score = '';
$google_indexed_pages_actual_score = '';
$google_inbound_links_actual_score = '';
$yahoo_indexed_pages_actual_score = '';
$yahoo_inbound_links_actual_score = '';
$bing_indexed_pages_actual_score = '';
$bing_inbound_links_actual_score = '';
$ask_indexed_pages_actual_score = '';
$alexa_rank_actual_score = '';
$alexa_inbound_links_actual_score = '';
$dmoz_listing_actual_score = '';
$site_advisor_rating_actual_score = '';
$wot_rating_actual_score = '';
$domain_age_actual_score = '';


$sitehost = ( $_REQUEST['sendurl'] ) ? $_REQUEST['sendurl'] : $_SERVER['HTTP_HOST'];

$sitehost = get_tld_from_url($sitehost);

$sitedomain = getDomainName($sitehost);
$page_title = getPageTitle($sitehost);
//$page_title_actual_score = mypage_title($page_title,$page_title_score);
$page_title_actual_score = 0;
//$page_title			  = strip_tags($_REQUEST['title']);
$meta_keywords = getMetaKeyword($sitehost);
//$meta_keywords_actual_score = mymeta_keywords($meta_keywords,$meta_keywords_score);
$meta_keywords_actual_score = 0;
$meta_description = getMetaDescription($sitehost);
//$meta_description_actual_score = mymeta_description($meta_description, $meta_description_score);
$meta_description_actual_score = 0;
//$meta_description     = strip_tags($_REQUEST[ 'desc' ]);
$last_modified = getLastModified($sitehost);
$last_modified_actual_score = mylast_modified($last_modified, $last_modified_score);
$google_page_rank = getGooglePageRank($sitehost);
$google_page_rank_actual_score = mygoogle_rank($google_page_rank, $google_page_rank_score);
$google_indexed_pages = getGooglePages($sitehost);
$google_indexed_pages_actual_score = mygoogle_index($google_indexed_pages, $google_indexed_pages_score);
$google_inbound_links = getGoogleLinks($sitehost);
$google_inbound_links_actual_score = mygoogle_inbound($google_inbound_links, $google_inbound_links_score);
$yahoo_indexed_pages = getYahooPages($sitehost);
$yahoo_indexed_pages_actual_score = myyahoo_index($yahoo_indexed_pages, $yahoo_indexed_pages_score);
$yahoo_inbound_links = getYahooLinks($sitehost);
$yahoo_inbound_links_actual_score = myyahoo_inbound($yahoo_inbound_links, $yahoo_inbound_links_score);
$bing_indexed_pages = getBingPages($sitehost);
$bing_indexed_pages_actual_score = mybing_index($bing_indexed_pages, $bing_indexed_pages_score);
$bing_inbound_links = getBingLinks($sitehost);
$bing_inbound_links_actual_score = mybing_inbound($bing_inbound_links, $bing_inbound_links_score);
$ask_indexed_pages = getAskPages($sitehost);
$ask_indexed_pages_actual_score = myask_index($ask_indexed_pages, $ask_indexed_pages_score);
$alexa_rank = getAlexaRank($sitedomain);
$alexa_rank_actual_score = myalexa_rank($alexa_rank, $alexa_rank_score);
$alexa_inbound_links = getAlexaLinks($sitedomain);
$alexa_inbound_links_actual_score = myalexa_inbound($alexa_inbound_links, $alexa_inbound_links_score);
$dmoz_listing = getDMOZListings($sitedomain);
$dmoz_listing_actual_score = mydmz_listing($dmoz_listing, $dmoz_listing_score);
$site_advisor_rating = getSiteAdvisorRating($sitedomain);
$site_advisor_rating_actual_score = mysite_advisior($site_advisor_rating, $site_advisor_rating_score);
$wot_rating = getWOTRating(getShortUrl($sitehost));
$wot_rating_actual_score = mywot_rating($wot_rating, $wot_rating_score);
$domain_age = getDomainAge($sitedomain);
$domain_age_actual_score = mydomain_age($domain_age, $domain_age_score);
$total_score = total_score($page_title_actual_score, $meta_keywords_actual_score, $meta_description_actual_score, $last_modified_actual_score, $google_page_rank_actual_score, $google_indexed_pages_actual_score, $google_inbound_links_actual_score, $yahoo_indexed_pages_actual_score, $yahoo_inbound_links_actual_score, $bing_indexed_pages_actual_score, $bing_inbound_links_actual_score, $ask_indexed_pages_actual_score, $alexa_rank_actual_score, $alexa_inbound_links_actual_score, $dmoz_listing_actual_score, $site_advisor_rating_actual_score, $wot_rating_actual_score, $domain_age_actual_score);
/* Declaring all actual score column Close here */

echo "<tr valign='top' bgcolor='#999999' ><td>&nbsp;</td>
<td style='width:150px'><strong>Page Title :</strong></td>
<td style='width:250px'><strong>Meta Keywords :</strong></td>
<td style='width:300px'><strong>Meta Description :</strong></td>
<td><strong>Last Modified :</strong></td>
<td><strong>Google Page Rank :</strong></td>
<td><strong>Google indexed pages :</strong></td>
<td><strong>Google inbound links :</strong></td>
<td><strong>Yahoo indexed pages :</strong></td>
<td><strong>Yahoo inbound links :</strong></td>
<td><strong>Bing indexed pages :</strong></td>
<td><strong>Bing inbound links :</strong></td>
<td><strong>Ask indexed pages :</strong></td>
<td><strong>Alexa Rank :</strong></td>
<td><strong>Alexa inbound links :</strong></td>
<td><strong>DMOZ listing :</strong></td>
<td><strong>SiteAdvisor rating :</strong></td>
<td><strong>WOT rating :</strong></td>
<td><strong>Domain age :</strong></td>
</tr>
<tr valign='top'><td><strong>Value:</strong></td>
<td>{$page_title}</td>
<td>{$meta_keywords}</td>
<td>{$meta_description}</td>
<td>{$last_modified}</td>
<td>{$google_page_rank}</td>
<td>{$google_indexed_pages}</td>
<td>{$google_inbound_links}</td>
<td>{$yahoo_indexed_pages}</td>
<td>{$yahoo_inbound_links}</td>
<td>{$bing_indexed_pages}</td>
<td>{$bing_inbound_links}</td>
<td>{$ask_indexed_pages}</td>
<td>{$alexa_rank}</td>
<td>{$alexa_inbound_links}</td>
<td>{$dmoz_listing}</td>
<td>{$site_advisor_rating}</td>
<td>{$wot_rating}</td>
<td>{$domain_age}</td>
</tr>
<tr valign='top'>
<td><strong>Max Score:</strong></td>
<td>{$page_title_score}</td>
<td>{$meta_keywords_score}</td>
<td>{$meta_description_score}</td>
<td>{$last_modified_score}</td>
<td>{$google_page_rank_score}</td>
<td>{$google_indexed_pages_score}</td>
<td>{$google_inbound_links_score}</td>
<td>{$yahoo_indexed_pages_score}</td>
<td>{$yahoo_inbound_links_score}</td>
<td>{$bing_indexed_pages_score}</td>
<td>{$bing_inbound_links_score}</td>
<td>{$ask_indexed_pages_score}</td>
<td>{$alexa_rank_score}</td>
<td>{$alexa_inbound_links_score}</td>
<td>{$dmoz_listing_score}</td>
<td>{$site_advisor_rating_score}</td>
<td>{$wot_rating_score}</td>
<td>{$domain_age_score}</td>
</tr>
<tr valign='top'>
<td><strong>Actual Score:</strong></td>
<td>{$page_title_actual_score}</td>
<td>{$meta_keywords_actual_score}</td>
<td>{$meta_description_actual_score}</td>
<td>{$last_modified_actual_score}</td>
<td>{$google_page_rank_actual_score}</td>
<td>{$google_indexed_pages_actual_score}</td>
<td>{$google_inbound_links_actual_score}</td>
<td>{$yahoo_indexed_pages_actual_score}</td>
<td>{$yahoo_inbound_links_actual_score}</td>
<td>{$bing_indexed_pages_actual_score}</td>
<td>{$bing_inbound_links_actual_score}</td>
<td>{$ask_indexed_pages_actual_score}</td>
<td>{$alexa_rank_actual_score}</td>
<td>{$alexa_inbound_links_actual_score}</td>
<td>{$dmoz_listing_actual_score}</td>
<td>{$site_advisor_rating_actual_score}</td>
<td>{$wot_rating_actual_score}</td>
<td>{$domain_age_actual_score}</td>
</tr>
<tr valign='top' bgcolor='#999999'><td><strong>Total Score:</strong></td><td colspan='18'>{$total_score}/100</td></tr>
";

/* Trustworthy Checker Testing Close Here */
?>
