<?php 
/*Under Process for Page title, meta keywords and meta description. Try some keywords like -- web devlopment company, srk, titanic etc.*/

/*Site Advisor Testing Results Starts Here*/
if($site_advisor_rating=='green')
{
	$newscore = number_format(($site_advisor_rating_score *100)/100, 2);
	$site_advisor_rating_actual_score = $newscore;
}
else if($site_advisor_rating=='yellow')
{
	$newscore = number_format(($site_advisor_rating_score *75)/100, 2);
	$site_advisor_rating_actual_score = $newscore;
}
else if($site_advisor_rating=='red')
{
	$newscore = number_format(($site_advisor_rating_score *50)/100, 2);
	$site_advisor_rating_actual_score = $newscore;
}
else if($site_advisor_rating=='grey')
{
	$newscore = number_format(($site_advisor_rating_score *25)/100, 2);
	$site_advisor_rating_actual_score = $newscore;
}
else
{
	$newscore = number_format(($site_advisor_rating_score *25)/100, 2);
	$site_advisor_rating_actual_score = $newscore;
}
/*Site Advisor Testing Results Close Here*/

/*Wot Rating Testing Results Starts Here*/
if($wot_rating=='Trustworthy')
{
	$newscore = number_format(($wot_rating_score*100)/100, 2);
	$wot_rating_actual_score = $newscore;
}
else if($wot_rating=='Mostly')
{
	$newscore = number_format(($wot_rating_score*80)/100, 2);
	$wot_rating_actual_score = $newscore;
}
else if($wot_rating=='Suspicious')
{
	$newscore = number_format(($wot_rating_score*60)/100, 2);
	$wot_rating_actual_score = $newscore;
}
else if($wot_rating=='Untrustworthy')
{
	$newscore = number_format(($wot_rating_score*40)/100, 2);
	$wot_rating_actual_score = $newscore;
}
else if($wot_rating=='Dangerous')
{
	$newscore = number_format(($wot_rating_score*20)/100, 2);
	$wot_rating_actual_score = $newscore;
}
else if($wot_rating=='Unknown')
{
	$newscore = number_format(($wot_rating_score*0)/100, 2);
	$wot_rating_actual_score = $newscore;
}
else
{
	$newscore = number_format(($wot_rating_score*0)/100, 2);
	$wot_rating_actual_score = $newscore;
}
/*Wot Rating Testing Results Close Here*/

/*Dmoz Listing Testing Results Starts Here*/
if(!$dmoz_listing || $dmoz_listing=='' || $dmoz_listing=='Not-Available')
{
	$newscore = number_format(($dmoz_listing_score*0)/100, 2);
	$dmoz_listing_actual_score = $newscore;
}
else
{
	$newscore = number_format(($dmoz_listing_score*100)/100, 2);
	$dmoz_listing_actual_score = $newscore;
}
/*Dmoz Listing Testing Results Close Here*/

/*Google Inbound Links Testing Starts Here*/
$google_inbound_links = preg_replace('/[\,]/', '', $google_inbound_links);
$google_inbound_links = trim($google_inbound_links);

if($google_inbound_links==0 || $google_inbound_links=='Not-Available')
{
	$newscore = number_format(($google_inbound_links_score*0)/100, 2);
	$google_inbound_links_actual_score = $newscore;
}
else if($google_inbound_links <=300)
{
	$newscore = number_format(($google_inbound_links_score*25)/100, 2);
	$google_inbound_links_actual_score = $newscore;
}
else if($google_inbound_links <=2000)
{
	$newscore = number_format(($google_inbound_links_score*50)/100, 2);
	$google_inbound_links_actual_score = $newscore;
}
else if($google_inbound_links <=5000)
{
	$newscore = number_format(($google_inbound_links_score*75)/100, 2);
	$google_inbound_links_actual_score = $newscore;
}
else
{
	$newscore = number_format(($google_inbound_links_score*100)/100, 2);
	$google_inbound_links_actual_score = $newscore;
}
/*Google Inbound Links Testing Close Here*/

/*Yahoo Inbound Links Testing Starts Here*/

$yahoo_inbound_links = preg_replace('/[\,]/', '', $yahoo_inbound_links);
$yahoo_inbound_links = trim($yahoo_inbound_links);

if($yahoo_inbound_links==0 || $yahoo_inbound_links=='Not-Available')
{
	$newscore = number_format(($yahoo_inbound_links_score*0)/100, 2);
	$yahoo_inbound_links_actual_score = $newscore;
}
else if($yahoo_inbound_links<=300)
{
	$newscore = number_format(($yahoo_inbound_links_score*25)/100, 2);
	$yahoo_inbound_links_actual_score = $newscore;
}
else if($yahoo_inbound_links<=2000)
{
	$newscore = number_format(($yahoo_inbound_links_score*50)/100, 2);
	$yahoo_inbound_links_actual_score = $newscore;
}
else if($yahoo_inbound_links<=5000)
{
	$newscore = number_format(($yahoo_inbound_links_score*75)/100, 2);
	$yahoo_inbound_links_actual_score = $newscore;
}
else
{
	$newscore = number_format(($yahoo_inbound_links_score*100)/100, 2);
	$yahoo_inbound_links_actual_score = $newscore;
}
/*Yahoo Inbound Links Testing Close Here*/

/*Bing Inbound Links Testing Starts Here*/

$bing_inbound_links = preg_replace('/[\,]/', '', $bing_inbound_links);
$bing_inbound_links = trim($bing_inbound_links);

if($bing_inbound_links==0 || $bing_inbound_links=='Not-Available')
{
	$newscore = number_format(($bing_inbound_links_score*0)/100, 2);
	$bing_inbound_links_actual_score = $newscore;
}
else if($bing_inbound_links<=300)
{
	$newscore = number_format(($bing_inbound_links_score*25)/100, 2);
	$bing_inbound_links_actual_score = $newscore;
}
else if($bing_inbound_links<=2000)
{
	$newscore = number_format(($bing_inbound_links_score*50)/100, 2);
	$bing_inbound_links_actual_score = $newscore;
}
else if($bing_inbound_links<=5000)
{
	$newscore = number_format(($bing_inbound_links_score*75)/100, 2);
	$bing_inbound_links_actual_score = $newscore;
}
else
{
	$newscore = number_format(($bing_inbound_links_score*100)/100, 2);
	$bing_inbound_links_actual_score = $newscore;
}
/*Bing Inbound Links Testing Close Here*/

/*Alexa Inbound Link Testing Starts Here*/

$alexa_inbound_links = preg_replace('/[\,]/', '', $alexa_inbound_links);
$alexa_inbound_links = trim($alexa_inbound_links);

if($alexa_inbound_links==0 || $alexa_inbound_links=='Not-Available')
{
	$newscore = number_format(($alexa_inbound_links_score*0)/100, 2);
	$alexa_inbound_links_actual_score = $newscore;
}
else if($alexa_inbound_links<=300)
{
	$newscore = number_format(($alexa_inbound_links_score*25)/100, 2);
	$alexa_inbound_links_actual_score = $newscore;
}
else if($alexa_inbound_links<=2000)
{
	$newscore = number_format(($alexa_inbound_links_score*50)/100, 2);
	$alexa_inbound_links_actual_score = $newscore;
}
else if($alexa_inbound_links<=5000)
{
	$newscore = number_format(($alexa_inbound_links_score*75)/100, 2);
	$alexa_inbound_links_actual_score = $newscore;
}
else
{
	$newscore = number_format(($alexa_inbound_links_score*100)/100, 2);
	$alexa_inbound_links_actual_score = $newscore;
}
/*Alexa Inbound Link Testing Close Here*/

/*Google Page Rank Starts Here*/

if($google_page_rank==0 || $google_page_rank=='' || $google_page_rank==-1)
{
	$newscore = number_format(($google_page_rank_score*0)/100, 2);
	$google_page_rank_actual_score = $newscore;
}
else if($google_page_rank<=2)
{
	$newscore = number_format(($google_page_rank_score*25)/100, 2);
	$google_page_rank_actual_score = $newscore;
}
else if($google_page_rank<5)
{
	$newscore = number_format(($google_page_rank_score*50)/100, 2);
	$google_page_rank_actual_score = $newscore;
}
else
{
	$newscore = number_format(($google_page_rank_score*100)/100, 2);
	$google_page_rank_actual_score = $newscore;
}
/*Google Page Rank Close Here*/

/*Google Indexed Page Starts Here*/

$google_indexed_pages = preg_replace('/[\,]/', '', $google_indexed_pages);
$google_indexed_pages = trim($google_indexed_pages);

if($google_indexed_pages==0 || $google_indexed_pages=='Not-Available')
{
	$newscore = number_format(($google_indexed_pages_score*0)/100, 2);
	$google_indexed_pages_actual_score = $newscore;
}
else if($google_indexed_pages<=100)
{
	$newscore = number_format(($google_indexed_pages_score*25)/100, 2);
	$google_indexed_pages_actual_score = $newscore;
}
else if($google_indexed_pages<=1000)
{
	$newscore = number_format(($google_indexed_pages_score*50)/100, 2);
	$google_indexed_pages_actual_score = $newscore;
}
else if($google_indexed_pages<=10000)
{
	$newscore = number_format(($google_indexed_pages_score*75)/100, 2);
	$google_indexed_pages_actual_score = $newscore;
}
else
{
	$newscore = number_format(($google_indexed_pages_score*100)/100, 2);
	$google_indexed_pages_actual_score = $newscore;
}
/*Google Indexed Page Starts Here*/

/*Yahoo Indexed Page Starts Here*/

$yahoo_indexed_pages = preg_replace('/[\,]/', '', $yahoo_indexed_pages);
$yahoo_indexed_pages = trim($yahoo_indexed_pages);

if($yahoo_indexed_pages==0 || $yahoo_indexed_pages=='Not-Available')
{
	$newscore = number_format(($yahoo_indexed_pages_score*0)/100, 2);
	$yahoo_indexed_pages_actual_score = $newscore;
}
else if($yahoo_indexed_pages<=100)
{
	$newscore = number_format(($yahoo_indexed_pages_score*25)/100, 2);
	$yahoo_indexed_pages_actual_score = $newscore;
}
else if($yahoo_indexed_pages<=1000)
{
	$newscore = number_format(($yahoo_indexed_pages_score*50)/100, 2);
	$yahoo_indexed_pages_actual_score = $newscore;
}
else if($yahoo_indexed_pages<=10000)
{
	$newscore = number_format(($yahoo_indexed_pages_score*75)/100, 2);
	$yahoo_indexed_pages_actual_score = $newscore;
}
else
{
	$newscore = number_format(($yahoo_indexed_pages_score*100)/100, 2);
	$yahoo_indexed_pages_actual_score = $newscore;
}
/*Yahoo Indexed Page Close Here*/

/*Bing Indexed Page Starts Here*/

$bing_indexed_pages = preg_replace('/[\,]/', '', $bing_indexed_pages);
$bing_indexed_pages = trim($bing_indexed_pages);

if($bing_indexed_pages==0 || $bing_indexed_pages=='Not-Available')
{
	$newscore = number_format(($bing_indexed_pages_score*0)/100, 2);
	$bing_indexed_pages_actual_score = $newscore;
}
else if($yahoo_indexed_pages<=100)
{
	$newscore = number_format(($bing_indexed_pages_score*25)/100, 2);
	$bing_indexed_pages_actual_score = $newscore;
}
else if($yahoo_indexed_pages<=1000)
{
	$newscore = number_format(($bing_indexed_pages_score*50)/100, 2);
	$bing_indexed_pages_actual_score = $newscore;
}
else if($yahoo_indexed_pages<=10000)
{
	$newscore = number_format(($bing_indexed_pages_score*75)/100, 2);
	$bing_indexed_pages_actual_score = $newscore;
}
else
{
	$newscore = number_format(($bing_indexed_pages_score*100)/100, 2);
	$bing_indexed_pages_actual_score = $newscore;
}
/*Bing Indexed Page Close Here*/

/*Ask Indexed Pages Starts Here*/

$ask_indexed_pages = preg_replace('/[\,]/', '', $ask_indexed_pages);
$ask_indexed_pages = trim($ask_indexed_pages);

if($ask_indexed_pages==0 || $ask_indexed_pages=='Not-Available')
{
	$newscore = number_format(($ask_indexed_pages_score*0)/100, 2);
	$ask_indexed_pages_actual_score = $newscore;
}
else if($ask_indexed_pages<=100)
{
	$newscore = number_format(($ask_indexed_pages_score*25)/100, 2);
	$ask_indexed_pages_actual_score = $newscore;
}
else if($ask_indexed_pages<=1000)
{
	$newscore = number_format(($ask_indexed_pages_score*50)/100, 2);
	$ask_indexed_pages_actual_score = $newscore;
}
else if($ask_indexed_pages<=10000)
{
	$newscore = number_format(($ask_indexed_pages_score*75)/100, 2);
	$ask_indexed_pages_actual_score = $newscore;
}
else
{
	$newscore = number_format(($ask_indexed_pages_score*100)/100, 2);
	$ask_indexed_pages_actual_score = $newscore;
}
/*Ask Indexed Pages Close Here*/

/*Domain Age Testing Results Starts Here*/
$newage = explode(',', $domain_age);
$modage = intval($newage[0]);

if($domain_age=='Unknown' || $modage==0)
{
	$newscore = number_format(($domain_age_score*0)/100, 2);
	$domain_age_actual_score = $newscore;
}
else if($modage<=4)
{
	$newscore = number_format(($domain_age_score*25)/100, 2);
	$domain_age_actual_score = $newscore;
}
else if($modage<=10)
{
	$newscore = number_format(($domain_age_score*50)/100, 2);
	$domain_age_actual_score = $newscore;
}
else if($modage<=15)
{
	$newscore = number_format(($domain_age_score*75)/100, 2);
	$domain_age_actual_score = $newscore;
}
else
{
	$newscore = number_format(($domain_age_score*100)/100, 2);
	$domain_age_actual_score = $newscore;
}
/*Domain Age Testing Results Close Here*/

/*Alexa Rank Testing Results Starts Here*/

$alexa_rank = preg_replace('/[\,]/', '', $alexa_rank);
$alexa_rank = trim($alexa_rank);
$alexa_rank = intval($alexa_rank);

//$ten_thousand = pow(10,4);
//$calc_rank = '';

if($alexa_rank<pow(10,5))
{
	$newscore = number_format(($alexa_rank_score*100)/100, 2);
	$alexa_rank_actual_score = $newscore;
}
else if($alexa_rank<pow(10,8))
{
	$newscore = number_format(($alexa_rank_score*75)/100, 2);
	$alexa_rank_actual_score = $newscore;
}
else if($alexa_rank<pow(10,11))
{
	$newscore = number_format(($alexa_rank_score*50)/100, 2);
	$alexa_rank_actual_score = $newscore;
}
else
{
	$newscore = number_format(($alexa_rank_score*25)/100, 2);
	$alexa_rank_actual_score = $newscore;
}
/*if($alexa_rank)
{
	$newscore = number_format(($alexa_rank_score*100)/100, 2);
	$alexa_rank_actual_score = $newscore;
}
else
{
	$newscore = number_format(($alexa_rank_score*0)/100, 2);
	$alexa_rank_actual_score = $newscore;
}
*/
/*Alexa Rank Testing Results Close Here*/

/*Page Title Testing Results Starts Here*/

$page_title = preg_replace('/[\,]/', ' ', $page_title);

$page_title = trim($page_title);

$new_page_title = explode(" ", $page_title);

$result = mysql_fetch_array(mysql_query('SELECT * FROM trustworthy_url order by uid desc LIMIT 1')) or die(mysql_error());

	$keyword = $result['keywords'];

	$keyword = strtolower($keyword);
	
	//$keyword = preg_replace('/[\,-"]/', '', $keyword);
	$keyword = eregi_replace(" +", " ", $keyword);
	
	$keyword = explode(" ", $keyword);
	
	$count_keyword = count($keyword);
	
	$counter = 0;
	
	if($count_keyword==1)
	{
		if($page_title=='')
		{
			$newscore = number_format(($page_title_score*0)/100, 2);
			$page_title_actual_score = $newscore;
		}
		else if(in_array($keyword[0],$new_page_title,true))
		{
			$newscore = number_format(($page_title_score*100)/100, 2);
			$page_title_actual_score = $newscore;
		}
		else
		{
			$newscore = number_format(($page_title_score*0)/100, 2);
			$page_title_actual_score = $newscore;
		}
	}
	else
	{
		while($counter<$count_keyword)
		{
			if($page_title=='')
			{
				$val = 0;
				break;
			}
			else if(in_array($keyword[$counter],$new_page_title,true))
			{
				$val = $val + 1;
			}
			$counter++;
		}
		
		/*if($val==$count_keyword)
		{
			$newscore = number_format(($page_title_score*100)/100, 2);
			$page_title_actual_score = $newscore;
		}
		else if($val >= intval($count_keyword/2))
		{
			$newscore = number_format(($page_title_score*50)/100, 2);
			$page_title_actual_score = $newscore;
		}
		else
		{
			$newscore = number_format(($page_title_score*25)/100, 2);
			$page_title_actual_score = $newscore;
		}*/
		
		//$page_title_actual_score = $val;
		
			if($val!=0)
			{
				$newscore = number_format(($page_title_score*100)/100, 2);
				$page_title_actual_score = $newscore;
			}
			else
			{
				$newscore = number_format(($page_title_score*0)/100, 2);
				$page_title_actual_score = $newscore;
			}
	}
		//$page_title_actual_score = count($keyword);
		mysql_free_result($result);

/*Page Title Testing Results Close Here*/


/*Meta Keywords Testing Starts Here*/

//$counter = 0;

$meta_keywords = preg_replace('/[\,]/', ' ', $meta_keywords);

$meta_keywords = trim($meta_keywords);

$new_meta_keywords  = explode(" ", $meta_keywords);

$result = mysql_fetch_array(mysql_query('SELECT * FROM trustworthy_url order by uid desc LIMIT 1')) or die(mysql_error());

$keyword = $result['keywords'];
	
	$keyword = strtolower($keyword);
	
	$keyword = eregi_replace(" +", " ", $keyword);
	
	$keyword = explode(" ", $keyword);
	
	/*while(strlen($keyword))
	{*/	
	
	$count_keyword = count($keyword);
	
	$counter = 0;
	if($count_keyword==1)
	{
		if($meta_keywords=='')
		{
			$newscore = number_format(($meta_keywords_score*0)/100, 2);
			$meta_keywords_actual_score = $newscore;
		}
		else if(in_array($keyword[0],$new_meta_keywords,true))
		{
			$newscore = number_format(($meta_keywords_score*100)/100, 2);
			$meta_keywords_actual_score = $newscore;
		}
		else
		{
			$newscore = number_format(($meta_keywords_score*0)/100, 2);
			$meta_keywords_actual_score = $newscore;
		}
	}
	else
	{
		while($counter<$count_keyword)
		{
			if($meta_keywords=='')
			{
				$val = 0;
				break;
			}
			else if(in_array($keyword[$counter],$new_meta_keywords,true))
			{
				$val = $val + 1;
			}
			$counter++;
		}
		
			if($val!=0)
			{
				$newscore = number_format(($meta_keywords_score*100)/100, 2);
				$meta_keywords_actual_score = $newscore;
			}
			else
			{
				$newscore = number_format(($meta_keywords_score*0)/100, 2);
				$meta_keywords_actual_score = $newscore;
			}
	}
		mysql_free_result($result);
	/*	$counter++;
	}
*/	
	
/*Meta Keywords Testing Close Here*/


/*Meta Description Testing Starts Here*/

//$counter = 0;

$new_meta_description  = explode(" ", $meta_description);

$result = mysql_fetch_array(mysql_query('SELECT * FROM trustworthy_url order by uid desc LIMIT 1')) or die(mysql_error());

$keyword = $result['keywords'];

$keyword = strtolower($keyword);

$keyword = eregi_replace(" +", " ", $keyword);

$keyword = explode(" ", $keyword);

	/*while(strlen($keyword))
	{*/
	
	$count_keyword = count($keyword);
	
	$counter = 0;
	
	if($count_keyword==1)
	{
		if($meta_description=='')
		{
			$newscore = number_format(($meta_description_score*0)/100, 2);
			$meta_description_actual_score = $newscore;
		}
		else if(in_array($keyword[0],$new_meta_description,true))
		{
			$newscore = number_format(($meta_description_score*100)/100, 2);
			$meta_description_actual_score = $newscore;
		}
		else
		{
			$newscore = number_format(($meta_description_score*0)/100, 2);
			$meta_description_actual_score = $newscore;
		}
	}
	else
	{
		while($counter<$count_keyword)
		{
			if($meta_description=='')
			{
				$val = 0;
				break;
			}
			else if(in_array($keyword[$counter],$new_meta_description,true))
			{
				$val = $val + 1;
			}
			$counter++;
		}
		
			if($val!=0)
			{
				$newscore = number_format(($meta_description_score*100)/100, 2);
				$meta_description_actual_score = $newscore;
			}
			else
			{
				$newscore = number_format(($meta_description_score*0)/100, 2);
				$meta_description_actual_score = $newscore;
			}
	}
		mysql_free_result($result);
		/*$counter++;
	}*/
	
	

/*Meta Description Testing Close Here*/


/*Last Modified Testing Results Starts Here*/

$getdate = date('Y');

$getdate = intval($getdate);

$new_last_modified = explode(" ",$last_modified);

$new_last_modified = intval($new_last_modified[3]);

$diff_date = $getdate - $new_last_modified;

if($last_modified=='' || $last_modified=='Not-Available' || $last_modified=='Unknown')
{
	$newscore = number_format(($last_modified_score*100)/100, 2);
	$last_modified_actual_score = $newscore;
}
else if($diff_date==0)
{
	$newscore = number_format(($last_modified_score*100)/100, 2);
	$last_modified_actual_score = $newscore;
}
else if($diff_date<=3)
{
	$newscore = number_format(($last_modified_score*75)/100, 2);
	$last_modified_actual_score = $newscore;
}
else if($diff_date<=6)
{
	$newscore = number_format(($last_modified_score*50)/100, 2);
	$last_modified_actual_score = $newscore;
}
else
{
	$newscore = number_format(($last_modified_score*25)/100, 2);
	$last_modified_actual_score = $newscore;
}
/*Last Modified Testing Results Close Here*/


/*Total Score Addition Starts*/
$total_score= $page_title_actual_score + $meta_keywords_actual_score + $meta_description_actual_score + $last_modified_actual_score + $google_page_rank_actual_score + $google_indexed_pages_actual_score + $google_inbound_links_actual_score + $yahoo_indexed_pages_actual_score + $yahoo_inbound_links_actual_score + $bing_indexed_pages_actual_score + $bing_inbound_links_actual_score + $ask_indexed_pages_actual_score + $alexa_rank_actual_score + $alexa_inbound_links_actual_score + $dmoz_listing_actual_score + $site_advisor_rating_actual_score + $wot_rating_actual_score + $domain_age_actual_score;

/*Total Score Addition Starts*/

 ?>