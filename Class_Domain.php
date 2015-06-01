<?php
  class Domain {
      const timeout = 30;
      const whoishost = 'whois.internic.net';
      var $title = '';
      var $description = '';
      var $keywords = '';
      var $part = '';
	  //message to display if the url can't be loaded
      var $error_invalid_url = 'Error';
      //display if title is not set
      var $error_no_title = 'Untitled';
      //display if description is not set
      var $error_no_desc = 'None set';
      //display if keywords is not set
      var $error_no_keywords = 'None set';
      //--------------------------------------------------------------------------
      function whois($domain) {
          $result = "";
          $errno = 0;
          $errstr = '';
          $fd = fsockopen(Domain::whoishost, 43, $errno, $errstr, Domain::timeout);
          if ($fd) {
              fputs($fd, $domain . "\015\012");
              while (!feof($fd)) {
                  $result .= fgets($fd, 128) . "<br />";
              }
              fclose($fd);
          }
          $e = $result;
          //display error if site can't be loaded
          if (!$e) {
              echo $this->error_invalid_url;
              exit();
          }
          //shorten string
          $line = substr($e, 0, 1000);
          //remove linebreaks from the string
          $linebreaks = array("\r\n", "\n", "\r");
          //Processes \r\n's first so they aren't converted twice.
          $line = str_replace($linebreaks, '', $line);
          // This only works if the title and its tags are on one line 
          if (preg_match('/Creation Date: ([a-z0-9-]+)/si', $line, $out)) {
              return $this->dateDifference($out[1], date("d-M-Y"));
          }
      }
      //----------------------------------------------------------------------------
      function GetDomain($url) {
          //$nowww = preg_replace('www\.','',$url);
          //$domain = parse_url($nowww);
          $domain = parse_url($url);
          if (!empty($domain["host"])) {
              return $domain["host"];
          } else {
              return $domain["path"];
          }
      }
      //----------------------------------------------------------------------------
      function GetDomain2($url) {
          // get host name from URL
          preg_match("/^(http:\/\/)?([^\/]+)/i", "http://www.php.net/index.html", $matches);
          $host = $matches[2];
          // get last two segments of host name
          preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
          echo "domain name is: {$matches[0]}\n";
          /* Output is php.net */
      }
      //----------------------------------------------------------------------------
      function getmetadata($url) {
          //make sure URL is formated correctly
          if (strstr($url, 'http://') == false) {
              $url = 'http://' . $url;
          }
          //get file contents
          $d = file_get_contents($url);
          //display error if site can't be loaded
          if (!$d) {
              echo $this->error_invalid_url;
              exit();
          }
          //shorten string
          $line = substr($d, 0, 3000);
          //remove linebreaks from the string
          $linebreaks = array("\r\n", "\n", "\r");
          //Processes \r\n's first so they aren't converted twice.
          $line = str_replace($linebreaks, '', $line);
          // This only works if the title and its tags are on one line 
          if (preg_match("/<title>(.*)<\/title>/i", $line, $out)) {
              $this->title = $out[1];
          }
          //get description
          $desc = get_meta_tags($url);
          $this->description = $desc['description'];
          //get keywords
          $keywords = get_meta_tags($url);
          $this->keywords = $keywords['keywords'];
      }
      //----------------------------------------------------------------------------
      //get title
      function get_title() {
          if (!$this->title) {
              return $this->error_no_title;
          } else {
              return $this->title;
          }
      }
      //----------------------------------------------------------------------------
      //get description
      function get_description() {
          if (!$this->description) {
              return $this->error_no_desc;
          } else {
              return $this->description;
          }
      }
      //----------------------------------------------------------------------------
      //get keywords
      function get_keywords() {
          if (!$this->keywords) {
              return $this->error_no_keywords;
          } else {
              return $this->keywords;
          }
      }
      //----------------------------------------------------------------------------
      function dateDifference($startDate, $endDate) {
          $startDate = strtotime($startDate);
          $endDate = strtotime($endDate);
          if ($startDate === false || $startDate < 0 || $endDate === false || $endDate < 0 || $startDate > $endDate)
              return false;
          $years = date('Y', $endDate) - date('Y', $startDate);
          $endMonth = date('m', $endDate);
          $startMonth = date('m', $startDate);
          // Calculate months
          $months = $endMonth - $startMonth;
          if ($months <= 0) {
              $months += 12;
              $years--;
          }
          if ($years < 0)
              return false;
          // Calculate the days
          $offsets = array();
          if ($years > 0)
              $offsets[] = $years . (($years == 1) ? ' year' : ' years');
          if ($months > 0)
              $offsets[] = $months . (($months == 1) ? ' month' : ' months');
          $offsets = count($offsets) > 0 ? '+' . implode(' ', $offsets) : 'now';
          $days = $endDate - strtotime($offsets, $startDate);
          $days = date('z', $days);
          $date = array($years, $months, $days);
          return $date[0] . " Years, " . $date[1] . " Month, " . $date[2] . " Day";
      }
      //----------------------------------------------------------------------------
      // Get Last Modify Date
      function lastmodified($url) {
		  $head['Last-Modified'] = '';
          if (strstr($url, 'http://') == false) {
              $url = 'http://' . $url;
          }
          $head = get_headers($url, 1);
          if($head['Last-Modified']==''){return 'Not Found in Header';}else{return $head['Last-Modified'];}		  
      }
      //----------------------------------------------------------------------------
      // Get Google Page Rank
      function google_page_rank($url) {
          // URL or domain name
          if (strlen(trim($url)) > 0) {
              if (strstr($url, 'http://') == false) {
                  $_url = 'http://' . $url;
              }
              $pagerank = trim($this->GooglePageRank($_url));
              if (empty($pagerank))
                  $pagerank = 0;
              return(int)($pagerank);
          }
          return 0;
      }
      function GooglePageRank($url) {
          $fp = fsockopen("toolbarqueries.google.com", 80, $errno, $errstr, 30);
          if (!$fp) {
              echo "$errstr ($errno)<br />\n";
          } else {
              $out = "GET /search?client=navclient-auto&ch=" . $this->CheckHash($this->HashURL($url)) . "&features=Rank&q=info:" . $url . "&num=100&filter=0 HTTP/1.1\r\n";
              $out .= "Host: toolbarqueries.google.com\r\n";
              $out .= "User-Agent: Mozilla/4.0 (compatible; GoogleToolbar 2.0.114-big; Windows XP 5.1)\r\n";
              $out .= "Connection: Close\r\n\r\n";
              fwrite($fp, $out);
              while (!feof($fp)) {
                  $data = fgets($fp, 128);
                  $pos = strpos($data, "Rank_");
                  if ($pos === false) {
                  } else {
                      $pagerank = substr($data, $pos + 9);
                  }
              }
              fclose($fp);
              return $pagerank;
          }
      }
      function StrToNum($Str, $Check, $Magic) {
          // 2^32
          $Int32Unit = 4294967296;
          $length = strlen($Str);
          for ($i = 0; $i < $length; $i++) {
              $Check *= $Magic;
              if ($Check >= $Int32Unit) {
                  $Check = ($Check - $Int32Unit * (int)($Check / $Int32Unit));
                  $Check = ($Check < -2147483648) ? ($Check + $Int32Unit) : $Check;
              }
              $Check += ord($Str{$i});
          }
          return $Check;
      }
      function HashURL($String) {
          $Check1 = $this->StrToNum($String, 0x1505, 0x21);
          $Check2 = $this->StrToNum($String, 0, 0x1003F);
          $Check1 >>= 2;
          $Check1 = (($Check1 >> 4) & 0x3FFFFC0) | ($Check1 & 0x3F);
          $Check1 = (($Check1 >> 4) & 0x3FFC00) | ($Check1 & 0x3FF);
          $Check1 = (($Check1 >> 4) & 0x3C000) | ($Check1 & 0x3FFF);
          $T1 = (((($Check1 & 0x3C0) << 4) | ($Check1 & 0x3C)) << 2) | ($Check2 & 0xF0F);
          $T2 = (((($Check1 & 0xFFFFC000) << 4) | ($Check1 & 0x3C00)) << 0xA) | ($Check2 & 0xF0F0000);
          return($T1 | $T2);
      }
      function CheckHash($Hashnum) {
          $CheckByte = 0;
          $Flag = 0;
          $HashStr = sprintf('%u', $Hashnum);
          $length = strlen($HashStr);
          for ($i = $length - 1; $i >= 0; $i--) {
              $Re = $HashStr{$i};
              if (1 === ($Flag % 2)) {
                  $Re += $Re;
                  $Re = (int)($Re / 10) + ($Re % 10);
              }
              $CheckByte += $Re;
              $Flag++;
          }
          $CheckByte %= 10;
          if (0 !== $CheckByte) {
              $CheckByte = 10 - $CheckByte;
              if (1 === ($Flag % 2)) {
                  if (1 === ($CheckByte % 2)) {
                      $CheckByte += 9;
                  }
                  $CheckByte >>= 1;
              }
          }
          return '7' . $CheckByte . $HashStr;
      }
      //----------------------------------------------------------------------------
      // Get Alexa Rank
      function alexaRank($domain) {
          $part = '';
          $remote_url = 'http://data.alexa.com/data?cli=10&dat=snbamz&url=' . trim($domain);
          $search_for = '<POPULARITY URL';
          if ($handle = @fopen($remote_url, "r")) {
              while (!feof($handle)) {
                  $part .= fread($handle, 100);
                  $pos = strpos($part, $search_for);
                  if ($pos === false)
                      continue;
                  else
                      break;
              }
              $part .= fread($handle, 100);
              fclose($handle);
          }
          $str = explode($search_for, $part);
          $str = array_shift(explode('"/>', $str[1]));
          $str = explode('TEXT="', $str);
          return $str[1];
      }
      //----------------------------------------------------------------------------
      function safeGoogleSearch() {
          //create a instance of the SOAP client object
          $soapclient = new soapclient2("http://api.google.com/search/beta2");
          // uncomment the next line to see debug messages
          //$soapclient->debug_flag = 1;
          // set up an array containing input parameters to be
          // passed to the remote procedure
          $params = array('key' => $api, // Google license key
          'q' => $search_term, // search term
          'start' => 0, // start from result n
          'maxResults' => 10, // show a total of n results
          'filter' => true, // remove similar results
          'restrict' => '', // restrict by topic
          'safeSearch' => true, // remove adult links
          'lr' => '', // restrict by language
          'ie' => '', // input encoding
          'oe' => ''); // output encoding
          // invoke the method on the server
          $result = $soapclient->call("doGoogleSearch", $params, "urn:GoogleSearch", "urn:GoogleSearch");
      }
      //----------------------------------------------------------------------------
      function getalexadesc($url) {
          $new_url = 'http://www.alexa.com/siteinfo/' . $url;
          $contents = file_get_contents($new_url);
          /* This will find the Global Alexa Rank */
          $start = strpos($contents, "<div class=\"data up\">") + 119;
          $stop = strpos($contents, "<div class=\"label\">Alexa Traffic Rank");
          $result = substr($contents, $start, $stop - $start);
          return $result;
      }
      //----------------------------------------------------------------------------
      function getalexalinks($domain) {
          $request = "http://data.alexa.com/data?cli=10&amp;dat=s&amp;url=" . $domain;
          $data = $this->geturldate($request);
          preg_match('/<LINKSIN NUM="([\d]+)"\/>/si', $data, $l);
          $value = ($l[1]) ? $l[1] : "Not-Available";
          //$string = "<a href=\"http://www.alexa.com/site/linksin/" . $domain . "\">" . number_format($value) . "</a>";
          $string = number_format($value);
          return $string;
      }
	  function geturldate($url){
		return file_get_contents($url);  
	  }
      //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
      //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
      //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
      //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
      //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
      //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------
	  //----------------------------------------------------------------------------

  }
?>