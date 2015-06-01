<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


<title>
	:: EDIT FACTOR  ::
</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">

<script language="javascript">
/*function test()
	{
		for(i=0; i<document.form1.elements.length; i++)
{
  if (document.form1.elements[i].value=='') 
  {
	  alert("Error:Enter Fill All Fields!!");
	   return false;
	  }
	  	  
}
	 }*/
	
function chkfactor()
{
	var total = parseInt(document.getElementById('PageTitle').value) + parseInt(document.getElementById('MetaKeywords').value) + parseInt(document.getElementById('MetaDescription').value) + parseInt(document.getElementById('AlexaRank').value) + parseInt(document.getElementById('GooglePagerank').value) + parseInt(document.getElementById('GoogleInboundLinks').value) + parseInt(document.getElementById('YahooInboundLinks').value) + parseInt(document.getElementById('google_indexed_pages').value) + parseInt(document.getElementById('yahoo_indexed_pages').value) + parseInt(document.getElementById('DomainAge').value) + parseInt(document.getElementById('wot_rating').value) + parseInt(document.getElementById('Lastmodifieddateforpage').value) + parseInt(document.getElementById('alexa_inbound_links').value) + parseInt(document.getElementById('dmoz_listing').value) + parseInt(document.getElementById('site_advisor_rating').value) + parseInt(document.getElementById('bing_indexed_pages').value) + parseInt(document.getElementById('bing_inbound_links').value) + parseInt(document.getElementById('ask_indexed_pages').value);
	
	var maxPercent = parseInt(document.getElementById('maxfactor').value);
	var newtotal = 0;
	newtotal = maxPercent - total;
	if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 //document.getElementById('MetaKeywords').focus();
				 document.getElementById('usemaxfactor').value=newtotal;
				 return false;
			  }
	document.getElementById('usemaxfactor').value=newtotal;
}
	 
/*function chkfactor()
    {
		var tempsub=0;
		var total=document.getElementById('maxfactor').value;
		
		var PageTitle=document.getElementById('PageTitle').value;				
		var newtotal=total-PageTitle;
		document.getElementById('usemaxfactor').value=newtotal;
		
		 
		var MetaKeywords=document.getElementById('MetaKeywords').value;
		var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-MetaKeywords;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('MetaKeywords').focus();
				 return false;
			  }
			
		var MetaDescription=document.getElementById('MetaDescription').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-MetaDescription;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('MetaDescription').focus();
				 return false;
			  }
			 
		var AlexaRank=document.getElementById('AlexaRank').value;
		var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-AlexaRank;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal< 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('AlexaRank').focus();
				 return false;
			  }
			  
		var GooglePagerank=document.getElementById('GooglePagerank').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-GooglePagerank;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('GooglePagerank').focus();
				 return false;
			  }
			  
		var GoogleInboundLinks=document.getElementById('GoogleInboundLinks').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-GoogleInboundLinks;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal< 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('GoogleInboundLinks').focus();
				 return false;
			  }
			  
		var YahooInboundLinks=document.getElementById('YahooInboundLinks').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-YahooInboundLinks;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('YahooInboundLinks').focus();
				 return false;
			  }
			  
		var google_indexed_pages=document.getElementById('google_indexed_pages').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-google_indexed_pages;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('google_indexed_pages').focus();
				 return false;
			  }
			  
		var yahoo_indexed_pages=document.getElementById('yahoo_indexed_pages').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-yahoo_indexed_pages;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('yahoo_indexed_pages').focus();
				 return false;
			  }
			  
		var DomainAge=document.getElementById('DomainAge').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-DomainAge;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('DomainAge').focus();
				 return false;
			  }
			  
		var test1=document.getElementById('wot_rating').value;
		var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-test1;
		document.getElementById('wot_rating').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('wot_rating').focus();
				 return false;
			  }
			  
			  
		var Lastmodifieddateforpage=document.getElementById('Lastmodifieddateforpage').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-Lastmodifieddateforpage;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('Lastmodifieddateforpage').focus();
				 return false;
			  }
		
		var alexa_inbound_links=document.getElementById('alexa_inbound_links').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-alexa_inbound_links;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('alexa_inbound_links').focus();
				 return false;
			  }
			  
			 
			 
			  var dmoz_listing=document.getElementById('dmoz_listing').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-dmoz_listing;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('dmoz_listing').focus();
				 return false;
			  }
			
			var site_advisor_rating=document.getElementById('site_advisor_rating').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-site_advisor_rating;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('site_advisor_rating').focus();
				 return false;
			  }
			  
			  var bing_indexed_pages=document.getElementById('bing_indexed_pages').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-bing_indexed_pages;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('bing_indexed_pages').focus();
				 return false;
			  }
			  
			  var bing_inbound_links=document.getElementById('bing_inbound_links').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-bing_inbound_links;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('bing_inbound_links').focus();
				 return false;
			  }
			  
			  var ask_indexed_pages=document.getElementById('ask_indexed_pages').value;
			var tempsub=document.getElementById('usemaxfactor').value;
		var newtotal=tempsub-ask_indexed_pages;
		document.getElementById('usemaxfactor').value=newtotal;
		  if(newtotal < 0)
		      {
				alert('Factor can not be Greater than Max Factor'); 
				 document.getElementById('ask_indexed_pages').focus();
				 return false;
			  }
	}*/	 
</script>
</head><body >
       <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" >
                    <? include_once("head.php"); ?>
				  <?
					 if($_SESSION['superadmin']=="No")
						{
						$_SESSION['username']="";
						echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=index.php">';
						exit;
						}
					if(isset($_REQUEST['Submit'])){
						    $id=$_POST['id'];
							$PageTitle=$_REQUEST['PageTitle'];
							$MetaKeywords=$_REQUEST['MetaKeywords'];
							$MetaDescription=$_REQUEST['MetaDescription'];
							$AlexaRank=$_REQUEST['AlexaRank'];
							$GooglePagerank=$_REQUEST['GooglePagerank'];
							$GoogleInboundLinks=$_REQUEST['GoogleInboundLinks'];
							$YahooInboundLinks=$_REQUEST['YahooInboundLinks'];
							$google_indexed_pages=$_REQUEST['google_indexed_pages'];
							$yahoo_indexed_pages=$_REQUEST['yahoo_indexed_pages'];
							$DomainAge=$_REQUEST['DomainAge'];
							$wot_rating=$_REQUEST['wot_rating'];
							$Lastmodifieddateforpage=$_REQUEST['Lastmodifieddateforpage'];
							$alexa_inbound_links=$_REQUEST['alexa_inbound_links'];
							$dmoz_listing = $_REQUEST['dmoz_listing'];
							$site_advisor_rating = $_REQUEST['site_advisor_rating'];
							$bing_indexed_pages = $_REQUEST['bing_indexed_pages'];
							$bing_inbound_links = $_REQUEST['bing_inbound_links'];
							$ask_indexed_pages = $_REQUEST['ask_indexed_pages'];
							//$id="1";
							
							$query="update factor set PageTitle='$PageTitle',MetaKeywords='$MetaKeywords',MetaDescription='$MetaDescription',AlexaRank='$AlexaRank',GooglePagerank='$GooglePagerank',GoogleInboundLinks='$GoogleInboundLinks',YahooInboundLinks='$YahooInboundLinks',google_indexed_pages='$google_indexed_pages',yahoo_indexed_pages='$yahoo_indexed_pages',DomainAge='$DomainAge',wot_rating='$wot_rating',Lastmodifieddateforpage='$Lastmodifieddateforpage',alexa_inbound_links='$alexa_inbound_links', dmoz_listing='$dmoz_listing', site_advisor_rating='$site_advisor_rating', bing_indexed_pages='$bing_indexed_pages', bing_inbound_links='$bing_inbound_links', ask_indexed_pages='$ask_indexed_pages' where id=1";
						
							$result=mysql_query ($query) or die(mysql_error()); 
							$massege="Factor Update Sucessfully";
							}
					?>
                </td>
            </tr>
          
                <td class="middlepartcss" colspan="2" valign="middle" align="center">
                    <!-- Table Start For General Settings Menu -->
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    
                            <td valign="top" width="220" align="left">
                                <? include_once("leftpanel.php");
								    //$id=$_REQUEST['id'];
									
									$queryshow="select * from factor"; 
									$resultshow1=mysql_query($queryshow) or die(mysql_error());
									$resultshow=mysql_fetch_array($resultshow1);
	 
								 ?> 
                            </td>
                            <td valign="top" align="right">
                                <!--Table For Content Place Holder -->
                                <table width="99%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td class="loginboxcss" valign="top" align="left" height="300">
                                            
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                <tbody><tr>
                                                    <td class="NormalText" valign="top">
                                                        <div>
                                                            
    <table width="99%" border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td valign="top" align="left">
                <div class="rightpanelheadingcss" align="left">
                    <strong>FACTOR ALLOCATED SCORE</strong></div>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="left" height="5">
            </td>
        </tr>
        <tr>
            <td class="loginboxcss" valign="top" align="left" height="300">
                <div align="left">
                
               <table width="500" align="center"  >
<form method="post" action="editfactor.php"  name="form1" id="form1" enctype="multipart/form-data">
                <tr>
                  <td colspan="2" align="left" valign="bottom" class="rightpanelheadingcss"><strong>FACTOR ALLOCATED SCORE</strong></td>
          </tr>
                <tr>
                  <td colspan="2" align="left" ><? echo $massege;?></td>
          </tr>
                <tr>
                  <td align="left" class="applytext">&nbsp;</td>
                  <td align="left" class="applytxtfieldpadding">&nbsp;</td>
                </tr>
                <tr>
                  <td width="220" align="left" class="applytext"><span style="vertical-align:top"><strong>Available Percent:</strong></span>&nbsp;<input name="usemaxfactor" type="text" class="textboxcss" id="usemaxfactor" value="" size="10" maxlength="3"/><span>%</span></td>
                  <td width="268" align="right" class="applytxtfieldpadding"><span style="vertical-align:top"><strong>Max Percent:</strong></span>&nbsp;<input name="maxfactor" type="text" class="textboxcss" id="maxfactor" value="100" size="10" maxlength="3" readonly="readonly"/><span>%</span>
                  </td>
                </tr>
                <tr>
                  <td align="left" class="ContentText" >Page Title : </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
              <input name="PageTitle" type="text" class="textboxcss" id="PageTitle" value="<? echo $resultshow['PageTitle']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
              <input type="hidden" name="id" value="<? echo $_REQUEST['id'] ?>" />
                    
                  </span></td>
          </tr>
                <tr>
                  <td align="left" class="ContentText" >Meta  Keywords: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
              <input name="MetaKeywords" type="text" class="textboxcss" id="MetaKeywords" value="<? echo $resultshow['MetaKeywords']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
                <tr>
                  <td align="left" class="ContentText">Meta Description: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
              <input name="MetaDescription" type="text" class="textboxcss" id="MetaDescription" value="<? echo $resultshow['MetaDescription']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
                <tr>
                  <td align="left" class="ContentText" >Alexa Rank: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="AlexaRank" type="text" class="textboxcss" id="AlexaRank" value="<? echo $resultshow['AlexaRank']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Google Pagerank: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="GooglePagerank" type="text" class="textboxcss" id="GooglePagerank" value="<? echo $resultshow['GooglePagerank']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Google Inbound Links: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="GoogleInboundLinks" type="text" class="textboxcss" id="GoogleInboundLinks" value="<? echo $resultshow['GoogleInboundLinks']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Yahoo Inbound Links: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="YahooInboundLinks" type="text" class="textboxcss" id="YahooInboundLinks" value="<? echo $resultshow['YahooInboundLinks']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Google Indexed Pages: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="google_indexed_pages" type="text" class="textboxcss" id="google_indexed_pages" value="<? echo $resultshow['google_indexed_pages']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr> <tr>
                  <td align="left" class="ContentText" >Yahoo Indexed Pages: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="yahoo_indexed_pages" type="text" class="textboxcss" id="yahoo_indexed_pages" value="<? echo $resultshow['yahoo_indexed_pages']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Domain Age: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="DomainAge" type="text" class="textboxcss" id="DomainAge" value="<? echo $resultshow['DomainAge']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Wot Rating: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="wot_rating" type="text" class="textboxcss" id="wot_rating" value="<? echo $resultshow['wot_rating']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Last Modified Date Of Page: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="Lastmodifieddateforpage" type="text" class="textboxcss" id="Lastmodifieddateforpage" value="<? echo $resultshow['Lastmodifieddateforpage']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           <tr>
                  <td align="left" class="ContentText" >Alexa Inbound Links: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="alexa_inbound_links" type="text" class="textboxcss" id="alexa_inbound_links" value="<? echo $resultshow['alexa_inbound_links']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
           
           <tr>
                  <td align="left" class="ContentText" >Dmoz Listing: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="dmoz_listing" type="text" class="textboxcss" id="dmoz_listing" value="<? echo $resultshow['dmoz_listing']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
          
          <tr>
                  <td align="left" class="ContentText" >Site Advisor Rating: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="site_advisor_rating" type="text" class="textboxcss" id="site_advisor_rating" value="<? echo $resultshow['site_advisor_rating']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
          
          <tr>
                  <td align="left" class="ContentText" >Bing Indexed Pages: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="bing_indexed_pages" type="text" class="textboxcss" id="bing_indexed_pages" value="<? echo $resultshow['bing_indexed_pages']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
          
          <tr>
                  <td align="left" class="ContentText" >Bing Inbound Links: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="bing_inbound_links" type="text" class="textboxcss" id="bing_inbound_links" value="<? echo $resultshow['bing_inbound_links']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
          
          <tr>
                  <td align="left" class="ContentText" >Ask Indexed Pages: </td>
                <td align="left" class="applytxtfieldpadding"><span class="contacttxtfieldpadding">
           <input name="ask_indexed_pages" type="text" class="textboxcss" id="ask_indexed_pages" value="<? echo $resultshow['ask_indexed_pages']; ?>" onblur="return chkfactor();" size="5" maxlength="3" />
                  </span></td>
          </tr>
          
                <tr>
                  <td align="left" class="applytext">&nbsp;</td>
                  <td align="left"><p class="submit">
                    <input type="submit" name="Submit" onclick="return chkfactor();" value="Update" title="Submit" class="bluebutton" />
                  </p></td>
          </tr>
              </form>
            </table>
                </div>
            </td>
        </tr>
    </tbody></table>

                                                        </div>
                                                        &nbsp;</td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        <tr>
                            <td height="100">
                            </td>
                        </tr>
                    </tbody></table>
                    <!-- Table End For General Settings Menu -->
                </td>
            </tr>
            <tr>
                <td class="bottomcss" valign="middle" align="left" height="26">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td>
                                <img alt="" src="images/bottomline.gif" width="1" height="23">
                            </td>
                            <td class="bottomcss" valign="middle" width="992" align="left">
                                <span>Copyright 2011 © # . All rights reserved. </span>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    </form>
</body></html>