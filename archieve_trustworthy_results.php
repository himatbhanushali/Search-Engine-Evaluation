<?php include('connection/config.php');
?>
<div id='trust_heading'>
Trustworthy Result For Perticular Keyword
</div>
<table>
  <tr>
    <td><table width="100%">
        <?php
  $query = mysql_query("SELECT * FROM trustworthy_result where rand_id ='".$_REQUEST['randid']."' ORDER BY total_score DESC");
    
  while($result = mysql_fetch_assoc($query))
  {
  ?>
        <tr class="th">
          <td width="150" height="30">Id Of Table:</td>
          <td><?php echo $result['uid'];?></td>
        </tr>
        <tr>
          <td>Page Title:</td>
          <td><?php echo mysql_real_escape_string($result['page_title']);
/*$page_title_result = mysql_fetch_array(mysql_query("select title as title from trustworthy_result where realurl='".$result["url"]."'"));			
		 echo $page_title_result['title'];*/
		  ?></td>
        </tr>
        <tr>
        <td>Meta Keywords:</td>
        <td><?php echo mysql_real_escape_string($result['meta_keywords']);?></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><?php echo mysql_real_escape_string($result['meta_description']);
/*$page_title_result = mysql_fetch_array(mysql_query("select description as description from trustworthy_result where realurl='".$result["url"]."'"));			
		 echo $page_title_result['description'];*/
		  ?></td>
        </tr>
        <tr>
          <td>Website URL:</td>
          <td><a href="<?php echo mysql_real_escape_string($result['url']); ?>" target="_blank"><?php echo mysql_real_escape_string($result['url']); ?></a></td>
        </tr>
        <tr>
          <td colspan="2" width="100%"><table border="0" cellpadding="5" cellspacing="5" width="100%">
          <tr><td colspan="19">"*" indicates for Page title, Meta Keywords and Meta Description which already displayed above.</td></tr>
              <tr class="title">
                <td >&nbsp;</td>
                <td >Page Title</td>
                <td >Meta Keywords</td>
                <td >Meta Description</td>
                <td >Last Modified</td>
                <td >Google Page Rank</td>
                <td >Google Indexed Pages</td>
                <td >Google Inbound Links</td>
                <td >Yahoo Indexed Pages</td>
                <td >Yahoo Inbound Links</td>
                <td >Bing Indexed Pages</td>
                <td >Bing Inbound Links</td>
                <td >Ask Indexed Pages</td>
                <td >Alexa Rank</td>
                <td >Alexa Inbound Links</td>
                <td >Dmoz-Listing</td>
                <td >Site Advisor Listing</td>
                <td >Wot Rating</td>
                <td >Domain Age</td>
              </tr>
              <tr nowrap="nowrap">
                <td >Values:</td>
                <td >*</td>
                <td >*</td>
                <td >*</td>
                <td ><?php echo mysql_real_escape_string($result['last_modified']); ?></td>
                <td ><?php 
				 echo substr($result['google_page_rank'],-2); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_indexed_pages']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_inbound_links']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['yahoo_indexed_pages']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['yahoo_inbound_links']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['bing_indexed_pages']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['bing_inbound_links']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['ask_indexed_pages']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['alexa_rank']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['alexa_inbound_links']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['dmoz_listing']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['site_advisor_rating']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['wot_rating']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['domain_age']); ?></td>
              </tr>
              <tr nowrap="nowrap">
              <td >Max Score</td>
                <td ><?php echo mysql_real_escape_string($result['page_title_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['meta_keywords_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['meta_description_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['last_modified_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_page_rank_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_indexed_pages_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_inbound_links_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['yahoo_indexed_pages_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['yahoo_inbound_links_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['bing_indexed_pages_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['bing_inbound_links_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['ask_indexed_pages_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['alexa_rank_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['alexa_inbound_links_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['dmoz_listing_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['site_advisor_rating_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['wot_rating_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['domain_age_score']); ?></td>
              </tr>
              <tr nowrap="nowrap">
				<td>Actual Score</td>
                <td ><?php echo mysql_real_escape_string($result['page_title_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['meta_keywords_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['meta_description_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['last_modified_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_page_rank_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_indexed_pages_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['google_inbound_links_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['yahoo_indexed_pages_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['yahoo_inbound_links_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['bing_indexed_pages_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['bing_inbound_links_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['ask_indexed_pages_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['alexa_rank_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['alexa_inbound_links_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['dmoz_listing_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['site_advisor_rating_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['wot_rating_actual_score']); ?></td>
                <td ><?php echo mysql_real_escape_string($result['domain_age_actual_score']); ?></td>
	            </tr>
            </table></td>
        </tr>
        <tr>
          <td >Final Score:</td>
          <td><?php echo $result['total_score'].'/100';} mysql_close($Connection);?></td>
          
        </tr>
        
      </table></td>
  </tr>
</table>
</div>