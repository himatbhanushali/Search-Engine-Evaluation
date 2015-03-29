<?php /*php easy :: seo report script*/
include('connection/config.php');
include('checker_functions.php');

/************Function Start********************/
function clean($string)
{
    $specialCharacters = array(
        "#" => "",
        "$" => "",
        "%" => "",
        "&" => "",
        "@" => "",
        "." => "",
        "€" => "",
        "+" => "",
        "=" => "",
        "§" => "",
        "/" => "",
        "'" => "",
        ";" => "",
        "`" => ""
    );
    while (list($character, $replacement) = each($specialCharacters)) {
        $string = str_replace($character, '-' . $replacement . '-', $string);
    }
    // Remove all remaining other unknown characters
    $string = preg_replace('/[^a-zA-Z0-9-]/', ' ', $string);
    $string = preg_replace('/^[-]+/', '', $string);
    $string = preg_replace('/[-]+$/', '', $string);
    $string = preg_replace('/[-]{2,}/', ' ', $string);
    return $string;
}
/************Function Close********************/
/************Function Start********************/
function get_match( $regex, $content )
        {
                preg_match( $regex, $content, $matches );
                return $matches[ 1 ];
        }
/************Function Close********************/
/************Function Start********************/
function getPageTitle( $host )
        {
                $fp      = fopen( $host, "r" );
                $content = "";
                while ( !feof( $fp ) )
                        {
                                $buffer = trim( fgets( $fp, 4096 ) );
                                $content .= $buffer;
                        } //!feof( $fp )
                $start = "<title>";
                $end   = "<\/title>";
                $title = get_match( "/$start(.*)$end/isU", $content );
                return $title;
        }
/************Function Close********************/
/************Function Start********************/
function getMetaKeyword( $host )
        {
                $metatagarray = get_meta_tags( $host );
                $keywords     = $metatagarray[ "keywords" ];
                return $keywords;
        }
/************Function Close********************/
/************Function Start********************/
function getMetaDescription( $host )
        {
                $metatagarray = get_meta_tags( $host );
                $description  = $metatagarray[ "description" ];
                return $description;
        }
/************Function Close********************/
/************Function Start********************/
function getLastModified( $host )
        {
                $head = get_headers( $host,1 );
                return $head['Last-Modified'];
        }
/************Function Close********************/
/************Function Start********************/
define( 'GOOGLE_MAGIC', 0xE6359A60 );
function _zeroFill( $a, $b )
        {
                $z = hexdec( 80000000 );
                if ( $z & $a )
                        {
                                $a = ( $a >> 1 );
                                $a &= ( ~$z );
                                $a |= 0x40000000;
                                $a = ( $a >> ( $b - 1 ) );
                        } //$z & $a
                else
                                $a = ( $a >> $b );
                return $a;
        }
function _mix( $a, $b, $c )
        {
                $a -= $b;
                $a -= $c;
                $a ^= ( _zeroFill( $c, 13 ) );
                $b -= $c;
                $b -= $a;
                $b ^= ( $a << 8 );
                $c -= $a;
                $c -= $b;
                $c ^= ( _zeroFill( $b, 13 ) );
                $a -= $b;
                $a -= $c;
                $a ^= ( _zeroFill( $c, 12 ) );
                $b -= $c;
                $b -= $a;
                $b ^= ( $a << 16 );
                $c -= $a;
                $c -= $b;
                $c ^= ( _zeroFill( $b, 5 ) );
                $a -= $b;
                $a -= $c;
                $a ^= ( _zeroFill( $c, 3 ) );
                $b -= $c;
                $b -= $a;
                $b ^= ( $a << 10 );
                $c -= $a;
                $c -= $b;
                $c ^= ( _zeroFill( $b, 15 ) );
                return array(
                                 $a,
                                $b,
                                $c 
                );
        }
function _GoogleCH( $url, $length = null, $init = GOOGLE_MAGIC )
        {
                if ( is_null( $length ) )
                                $length = sizeof( $url );
                $a   = $b = 0x9E3779B9;
                $c   = $init;
                $k   = 0;
                $len = $length;
                while ( $len >= 12 )
                        {
                                $a += ( $url[ $k + 0 ] + ( $url[ $k + 1 ] << 8 ) + ( $url[ $k + 2 ] << 16 ) + ( $url[ $k + 3 ] << 24 ) );
                                $b += ( $url[ $k + 4 ] + ( $url[ $k + 5 ] << 8 ) + ( $url[ $k + 6 ] << 16 ) + ( $url[ $k + 7 ] << 24 ) );
                                $c += ( $url[ $k + 8 ] + ( $url[ $k + 9 ] << 8 ) + ( $url[ $k + 10 ] << 16 ) + ( $url[ $k + 11 ] << 24 ) );
                                $_mix = _mix( $a, $b, $c );
                                $a    = $_mix[ 0 ];
                                $b    = $_mix[ 1 ];
                                $c    = $_mix[ 2 ];
                                $k += 12;
                                $len -= 12;
                        } //$len >= 12
                $c += $length;
                switch ( $len )
                {
                                case 11:
                                                $c += ( $url[ $k + 10 ] << 24 );
                                case 10:
                                                $c += ( $url[ $k + 9 ] << 16 );
                                case 9:
                                                $c += ( $url[ $k + 8 ] << 8 );
                                case 8:
                                                $b += ( $url[ $k + 7 ] << 24 );
                                case 7:
                                                $b += ( $url[ $k + 6 ] << 16 );
                                case 6:
                                                $b += ( $url[ $k + 5 ] << 8 );
                                case 5:
                                                $b += ( $url[ $k + 4 ] );
                                case 4:
                                                $a += ( $url[ $k + 3 ] << 24 );
                                case 3:
                                                $a += ( $url[ $k + 2 ] << 16 );
                                case 2:
                                                $a += ( $url[ $k + 1 ] << 8 );
                                case 1:
                                                $a += ( $url[ $k + 0 ] );
                } //$len
                $_mix = _mix( $a, $b, $c );
                return $_mix[ 2 ];
        }
function _strord( $string )
        {
                for ( $i = 0; $i < strlen( $string ); $i++ )
                                $result[ $i ] = ord( $string{$i} );
                return $result;
        }
function getGooglePageRank( $url )
        {
                $pagerank = -1;
                $ch       = "6" . _GoogleCH( _strord( "info:" . $url ) );
                $fp       = fsockopen( "www.google.com", 80, $errno, $errstr, 180 );
                if ( $fp )
                        {
                                $out = "GET /search?client=navclient-auto&ch=" . $ch . "&features=Rank&q=info:" . $url . " HTTP/1.1\r\n";
                                $out .= "Host: www.google.com\r\n";
                                $out .= "Connection: Close\r\n\r\n";
                                fwrite( $fp, $out );
                                while ( !feof( $fp ) )
                                        {
                                                $data = fgets( $fp, 128 );
                                                $pos  = strpos( $data, "Rank_" );
                                                if ( $pos === false )
                                                        {
                                                        } //$pos === false
                                                else
                                                                $pagerank = substr( $data, $pos + 9 );
                                        } //!feof( $fp )
                                fclose( $fp );
                        } //$fp
                if ( $pagerank == '-1' )
                        {
                                $url = explode( '.', $url );
                                $url = 'www.' . $url[ 1 ] . '.com/';
                                //echo $url;
                                return getGooglePageRank( $url );
                                //return $url;
                        } //$pagerank == '-1'
                else
                        {
                                return $pagerank;
                        }
        }
/************Function Close********************/
/************Function Start********************/
function getGooglePages( $host )
        {
                $request = "http://www.google.com/search?q=" . urlencode( "site:" . $host ) . "&amp;hl=en";
                $data    = getPageData( $request );
                preg_match( '/<div id=resultStats>(About )?([\d,]+) result/si', $data, $p );
                $value  = ( $p[ 2 ] ) ? $p[ 2 ] : "Not-Available";
                //$string = "<a href=\"" . $request . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getGoogleLinks( $host )
        {
                $request = "http://www.google.com/search?q=" . urlencode( "link:" . $host ) . "&amp;hl=en";
                $data    = getPageData( $request );
                preg_match( '/<div id=resultStats>(About )?([\d,]+) result/si', $data, $l );
                $value  = ( $l[ 2 ] ) ? $l[ 2 ] : "Not-Available";
                //$string = "<a href=\"" . $request . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getYahooPages( $host )
        {
                $request = "http://siteexplorer.search.yahoo.com/search?p=" . urlencode( "http://" . $host );
                $data    = getPageData( $request );
                preg_match( '/Pages \(([\d,]+)/si', $data, $p );
                $value  = ( $p[ 1 ] ) ? $p[ 1 ] : "Not-Available";
                $string = "<a href=\"" . $request . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getYahooLinks( $host )
        {
                $request = "http://siteexplorer.search.yahoo.com/search?p=" . urlencode( "http://" . $host );
                $data    = getPageData( $request );
                preg_match( '/Inlinks \(([\d,]+)/si', $data, $l );
                $value = ( $l[ 1 ] ) ? $l[ 1 ] : "Not-Available";
                //$string .= "<a href=\"" . $request . "&amp;bwm=i\">" . $value . "</a>";
                $string .= $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getBingPages( $host )
        {
                $request = "http://www.bing.com/search?q=" . urlencode( "site:" . $host ) . "&amp;mkt=en-US";
                $data    = getPageData( $request );
                preg_match( '/1-([\d]+) of ([\d,]+)/si', $data, $p );
                $value  = ( $p[ 2 ] ) ? $p[ 2 ] : "Not-Available";
                //$string = "<a href=\"" . $request . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getBingLinks( $host )
        {
                $request = "http://www.bing.com/search?q=" . urlencode( "inbody:" . $host ) . "&amp;mkt=en-US";
                $data    = getPageData( $request );
                preg_match( '/1-([\d]+) of ([\d,]+)/si', $data, $p );
                $value  = ( $p[ 2 ] ) ? $p[ 2 ] : "Not-Available";
                //$string = "<a href=\"" . $request . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getAskPages( $host )
        {
                $request = "http://www.ask.com/web?q=" . urlencode( $host . " site:" . $host );
                $data    = getPageData( $request );
                preg_match( '/<span id=\'indexLast\' class=\'b\'>([\d]+)<\/span> of ([\d,]+)/si', $data, $p );
                $value  = ( $p[ 2 ] ) ? $p[ 2 ] : "Not-Available";
                //$string = "<a href=\"" . $request . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getAlexaRank( $domain )
        {
                $request = "http://data.alexa.com/data?cli=10&amp;dat=s&amp;url=" . $domain;
                $data    = getPageData( $request );
                preg_match( '/<POPULARITY URL="(.*?)" TEXT="([\d]+)"\/>/si', $data, $p );
                $value  = ( $p[ 2 ] ) ? $p[ 2 ] : "Not-Available";
                //$string = "<a href=\"http://www.alexa.com/siteinfo/" . $domain . "\">" . number_format($value) . "</a>";
                $string = number_format( $value );
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getAlexaLinks( $domain )
        {
                $request = "http://data.alexa.com/data?cli=10&amp;dat=s&amp;url=" . $domain;
                $data    = getPageData( $request );
                preg_match( '/<LINKSIN NUM="([\d]+)"\/>/si', $data, $l );
                $value  = ( $l[ 1 ] ) ? $l[ 1 ] : "Not-Available";
                //$string = "<a href=\"http://www.alexa.com/site/linksin/" . $domain . "\">" . number_format($value) . "</a>";
                $string = number_format( $value );
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getDMOZListings( $domain )
        {
                $request = "http://data.alexa.com/data?cli=10&amp;url=" . $domain;
                $data    = getPageData( $request );
                preg_match( '/<SITE BASE="(.*?)" TITLE="(.*?)" DESC="(.*?)">/si', $data, $s );
                $value1 = ( $s[ 1 ] ) ? $s[ 1 ] : "";
                $value2 = ( $s[ 2 ] ) ? $s[ 2 ] : "";
                $value3 = ( $s[ 3 ] ) ? $s[ 3 ] : "";
                preg_match( '/<CAT ID="(.*?)" TITLE="(.*?)" CID="(.*?)"\/>/si', $data, $c );
                $value4 = ( $c[ 1 ] ) ? $c[ 1 ] : "";
                $value5 = ( $c[ 2 ] ) ? $c[ 2 ] : "";
                $value6 = ( $c[ 3 ] ) ? $c[ 3 ] : "";
                $string = "";
                if ( $value4 )
                        {
                                //$string = "<a href=\"http://www.dmoz.org/" . str_replace("Top/", "", $value4) . "\" title=\"" . $value2 . " - " . $value3 . "\">" . $value5 . "</a>";
                                $string = $value5;
                        } //$value4
                else
                                $string = "Not-Available";
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getSiteAdvisorRating( $domain )
        {
                $request = "http://www.siteadvisor.com/sites/" . $domain . "?ref=safe&amp;locale=en-US";
                $data    = getPageData( $request );
                preg_match( '/(green|yellow|red)-xbg2\.gif/si', $data, $r );
                $value  = ( $r[ 1 ] ) ? $r[ 1 ] : "grey";
                //$string = "<a href=\"" . $request . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getWOTRating( $domain )
        {
                $request = "http://api.mywot.com/0.4/public_query2?target=" . $domain;
                $data    = getPageData( $request );
                preg_match_all( '/<application name="(\d+)" r="(\d+)" c="(\d+)"\/>/si', $data, $regs );
                $trustworthiness = ( $regs[ 2 ][ 0 ] ) ? $regs[ 2 ][ 0 ] : -1;
                $values          = array(
                                 "Trustworthy",
                                "Mostly",
                                "Suspicious",
                                "Untrustworthy",
                                "Dangerous",
                                "Unknown" 
                );
                if ( $trustworthiness >= 80 )
                                $value = $values[ 0 ];
                elseif ( $trustworthiness >= 60 )
                                $value = $values[ 1 ];
                elseif ( $trustworthiness >= 40 )
                                $value = $values[ 2 ];
                elseif ( $trustworthiness >= 20 )
                                $value = $values[ 3 ];
                elseif ( $trustworthiness >= 0 )
                                $value = $values[ 4 ];
                else
                                $value = $values[ 5 ];
                //$string = "<a href=\"http://www.mywot.com/en/scorecard/" . $domain . "\">" . $value . "</a>";
                $string = $value;
                return $string;
        }
/************Function Close********************/
/************Function Start********************/
function getDomainAge( $domain )
        {
                $request = "http://reports.internic.net/cgi/whois?whois_nic=" . $domain . "&type=domain";
                $data    = getPageData( $request );
                preg_match( '/Creation Date: ([a-z0-9-]+)/si', $data, $p );
                if ( !$p[ 1 ] )
                        {
                                $value = "Unknown";
                        } //!$p[ 1 ]
                else
                        {
                                $time  = time() - strtotime( $p[ 1 ] );
                                $years = floor( $time / 31556926 );
                                $days  = floor( ( $time % 31556926 ) / 86400 );
                                if ( $years == "1" )
                                        {
                                                $y = "1 year";
                                        } //$years == "1"
                                else
                                        {
                                                $y = $years . " years";
                                        }
                                if ( $days == "1" )
                                        {
                                                $d = "1 day";
                                        } //$days == "1"
                                else
                                        {
                                                $d = $days . " days";
                                        }
                                $value = "$y, $d";
                        }
                //$string = "<a href=\"" . $request . "\">" . $value . "</a>";
                if ( $value == 'Unknown' )
                        {
                                //$domain = explode('.',$domain);
                                $domain = substr( $domain, 0, -1 );
                                //echo $domain.': if';
                                return getDomainAge( $domain );
                        } //$value == 'Unknown'
                else
                ///echo $domain.': else';
                        {
                                $string = $value;
                                return $string;
                        }
        }
/************Function Close********************/
/************Function Start********************/
function getPageData( $url )
        {
                if ( function_exists( 'curl_init' ) )
                        {
                                // initialize curl with given url
                                $ch = curl_init( $url );
                                // add useragent
                                curl_setopt( $ch, CURLOPT_USERAGENT, $_SERVER[ 'HTTP_USER_AGENT' ] );
                                // write the response to a variable
                                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                                if ( ( ini_get( 'open_basedir' ) == '' ) && ( ini_get( 'safe_mode' ) == 'Off' ) )
                                        {
                                                // follow redirects if any
                                                curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
                                        } //( ini_get( 'open_basedir' ) == '' ) && ( ini_get( 'safe_mode' ) == 'Off' )
                                // max. seconds to execute
                                curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
                                // stop when it encounters an error
                                curl_setopt( $ch, CURLOPT_FAILONERROR, 1 );
                                return @curl_exec( $ch );
                        } //function_exists( 'curl_init' )
                else
                        {
                                return @file_get_contents( $url );
                        }
        }
/************Function Close********************/
/************Function Start********************/
function getDomainName( $host )
        {
                // split host name to parts
                $hostparts = explode( '.', $host );
                // get parts number
                $num       = count( $hostparts );
                if ( preg_match( '/^(ac|arpa|biz|co|com|edu|gov|info|int|me|mil|mobi|museum|name|net|org|pp|tv)$/i', $hostparts[ $num - 2 ] ) )
                        {
                                // for ccTLDs like .co.uk etc.
                                $domain = $hostparts[ $num - 3 ] . '.' . $hostparts[ $num - 2 ] . '.' . $hostparts[ $num - 1 ];
                        } //preg_match( '/^(ac|arpa|biz|co|com|edu|gov|info|int|me|mil|mobi|museum|name|net|org|pp|tv)$/i', $hostparts[ $num - 2 ] )
                else
                        {
                                $domain = $hostparts[ $num - 2 ] . '.' . $hostparts[ $num - 1 ];
                        }
                return $domain;
        }
/************Function Close********************/
/************Function Start********************/
/*function getValidUrl( $realurl )
        {
$findtld = strstr($realurl, '.co.in/', false);
$findtld = strstr($realurl, '.com/', false);

if($findtld=='.com/')
{
$realurl = strstr($realurl, '.com/', true);
$realurl = $realurl.'.com/';
}
else
{
$realurl = strstr($realurl, '.co.in/', true);
$realurl = $realurl.'.co.in/';
}
return $realurl;
        }*/
function get_tld_from_url( $url )
{
		$tld = '';
	
		$url_parts = parse_url( (string) $url );
		if( is_array( $url_parts ) && isset( $url_parts[ 'host' ] ) )
		{
			$host_parts = explode( '.', $url_parts[ 'host' ] );
			if( is_array( $host_parts ) && count( $host_parts ) > 0 )
			{
				$tld = array_pop( $host_parts );
				$tld = strstr($url,$tld ,true ).$tld;
			}
		}
	
		return $tld;
}

/************Function Close********************/
/************Function Start********************/
function getShortUrl( $realurl )
        {
$realurl = str_replace('http://','',$realurl);
$realurl = str_replace('/','',$realurl);
return $realurl;
        }
/************Function Close********************/

/*Trustworthy Checker Testing Here*/

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


$sitehost             = ( $_REQUEST[ 'sendurl' ] ) ? $_REQUEST[ 'sendurl' ] : $_SERVER[ 'HTTP_HOST' ];

$sitehost			  = get_tld_from_url($sitehost);	

$sitedomain           = getDomainName( $sitehost );
$page_title           = getPageTitle( $sitehost );
//$page_title_actual_score = mypage_title($page_title,$page_title_score);
$page_title_actual_score = 0;
//$page_title			  = strip_tags($_REQUEST['title']);
$meta_keywords        = getMetaKeyword( $sitehost );
//$meta_keywords_actual_score = mymeta_keywords($meta_keywords,$meta_keywords_score);
$meta_keywords_actual_score=0;
$meta_description     = getMetaDescription( $sitehost );
//$meta_description_actual_score = mymeta_description($meta_description, $meta_description_score);
$meta_description_actual_score=0;
//$meta_description     = strip_tags($_REQUEST[ 'desc' ]);
$last_modified        = getLastModified( $sitehost );
$last_modified_actual_score = mylast_modified($last_modified,$last_modified_score);
$google_page_rank     = getGooglePageRank( $sitehost );
$google_page_rank_actual_score = mygoogle_rank($google_page_rank,$google_page_rank_score);
$google_indexed_pages = getGooglePages( $sitehost );
$google_indexed_pages_actual_score = mygoogle_index($google_indexed_pages,$google_indexed_pages_score);
$google_inbound_links = getGoogleLinks( $sitehost );
$google_inbound_links_actual_score = mygoogle_inbound($google_inbound_links, $google_inbound_links_score);
$yahoo_indexed_pages  = getYahooPages( $sitehost );
$yahoo_indexed_pages_actual_score = myyahoo_index($yahoo_indexed_pages, $yahoo_indexed_pages_score);
$yahoo_inbound_links  = getYahooLinks( $sitehost );
$yahoo_inbound_links_actual_score = myyahoo_inbound($yahoo_inbound_links,$yahoo_inbound_links_score);
$bing_indexed_pages   = getBingPages( $sitehost );
$bing_indexed_pages_actual_score = mybing_index($bing_indexed_pages,$bing_indexed_pages_score);
$bing_inbound_links   = getBingLinks( $sitehost );
$bing_inbound_links_actual_score= mybing_inbound($bing_inbound_links,$bing_inbound_links_score);
$ask_indexed_pages    = getAskPages( $sitehost );
$ask_indexed_pages_actual_score= myask_index($ask_indexed_pages,$ask_indexed_pages_score);
$alexa_rank           = getAlexaRank( $sitedomain );
$alexa_rank_actual_score= myalexa_rank($alexa_rank,$alexa_rank_score);
$alexa_inbound_links  = getAlexaLinks( $sitedomain );
$alexa_inbound_links_actual_score= myalexa_inbound($alexa_inbound_links,$alexa_inbound_links_score);
$dmoz_listing         = getDMOZListings( $sitedomain );
$dmoz_listing_actual_score= mydmz_listing($dmoz_listing,$dmoz_listing_score);
$site_advisor_rating  = getSiteAdvisorRating( $sitedomain );
$site_advisor_rating_actual_score= mysite_advisior($site_advisor_rating,$site_advisor_rating_score);
$wot_rating           = getWOTRating(getShortUrl( $sitehost ));
$wot_rating_actual_score= mywot_rating($wot_rating,$wot_rating_score);
$domain_age           = getDomainAge( $sitedomain );
$domain_age_actual_score= mydomain_age($domain_age,$domain_age_score);
$total_score = total_score($page_title_actual_score,$meta_keywords_actual_score, $meta_description_actual_score,$last_modified_actual_score, $google_page_rank_actual_score, $google_indexed_pages_actual_score, $google_inbound_links_actual_score, $yahoo_indexed_pages_actual_score, $yahoo_inbound_links_actual_score, $bing_indexed_pages_actual_score, $bing_inbound_links_actual_score, $ask_indexed_pages_actual_score, $alexa_rank_actual_score, $alexa_inbound_links_actual_score, $dmoz_listing_actual_score, $site_advisor_rating_actual_score, $wot_rating_actual_score, $domain_age_actual_score);
/*Declaring all actual score column Close here*/

echo "<tr><td>&nbsp;</td>
<td><strong>Page Title :</strong></td>
<td><strong>Meta Keywords :</strong></td>
<td><strong>Meta Description :</strong></td>
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
<tr><td><strong>Value:</strong></td>
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
<tr>
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
<tr>
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
<tr><td><strong>Total Score:</strong></td><td colspan='18'>{$total_score}/100</td></tr>
";

/*Trustworthy Checker Testing Close Here*/
?>
