<script src="../js/jquery-1.4.4.min.js"></script>
<script src="../js/script.js"></script>
<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
<!--[if IE ]>
<style>#page{margin-left:160px}</style>
<![endif]-->
<!--id="page" Start-->
<div id="page">
	<h1>&nbsp;</h1>
	<form id="searchForm" method="post">
		<fieldset>
          <font color="#FFFFFF">Enter search query what you like to Search from Google </font><br /><br />
			<input id="s" type="text" value=""/>
				<input type="submit" value="Submit" id="submitButton" name="Submit"/>
			<!--<input type="button" value="View Result" id="results" onclick="window.open('../view_results.php');"/>-->
            <br />
			<a class="white" href="../view_results.php" id="results" target="_blank">Click Here To Load Truth Discovery On Web Results</a>
			<div id="progress">
			</div>
			<!--<a class="white" href="#" id="auto_trust">Auto Save Trustworthy Result</a>-->
		</fieldset>
	</form>
	<div id="control-box">
		<a href="javascript:void(0)" title="Save Trustworthy Result in Bulk Mode" id="bulk-mode">
		Save Trustworthy Results in Bulk Mode </a>
		<a href="javascript:void(0)" title="Save Trustworthy Result in Manual Mode" id="manual-mode">
		Enable Manual Mode to Save Results  </a>
	</div>
	<div id="resultsDiv">
	</div>
</div>
<!--id="page" End Here-->
<script>
$(document).ready(function(){
	$('#results').hide();
	$('#more').live('click', function(){
		$('#results').hide();
		});
	$('#single_trust_result').live('click', function(){
		var div = $(this).parents("div").eq(0);
		var option2 = div.find("h2").find('a').attr('href');
		$(this).html('<img src="../img/loading_bar.gif" border="0" />');
		/* Call ajax */
		$.ajax({
        type: "POST",
        url: "../insert.factor_manual.php",
        data: "url=" + option2,
        success: function(status) {
			if(status=='red')
			{
				div.find('#single_trust_result').html('<img src="../img/errorIcon.png" border = "0" /> Sorry! Trustworthy Factor (Not Saved)');
				div.find("h2").css({backgroundColor: status});
			}else if(status=='green'){
				div.find('#single_trust_result').html('<img src="../img/success_icon.gif" border = "0" /> Wow! Trustworthy Factor (Has Been Saved Sucessfully)');
				div.find("h2").css({backgroundColor: status});
				}
				else{
					div.find('#single_trust_result').html('<img src="../img/errorIcon.png" border = "0" /> Sorry! Trustworthy Factor (Not Saved)');
					div.find("h2").css({backgroundColor: '#BE5858'});
				}
				$('#results').show();
			}
    });
		/*  End ajax */
		});
});
	$('#bulk-mode').click(function(){
		var choice = confirm('Bulk mode is sutable for fast internet connection. \n \n Please note that bulk mode might truncate or ignore some urls depends on the time taken for cacluation/internet connectivity etc. \n\n This may not work well for all urls due to Non-Active url, factors value not available with third party, subdomain values not available etc \n\n Are you sure you want to continue?');
		if(choice){
			$('#manual-mode').css({background:'url(../img/manual.png) no-repeat #F3F3F3'});
			$('#bulk-mode').css({background:'url(../img/bulk.png) no-repeat #F3F3F3'});
		$("#progress").html('<img src="../img/loading.gif" border="0" />');
		/*************************************/
		var i=0;
		$('div.webResult').each(function(index) { 		
		var bulkurl = $(this).find("h2").find('a').attr('href');
		$(this).find('a#single_trust_result').html('<img src="../img/loading_bar.gif" border="0" />');
		/* Call ajax */
		$.ajax({
        type: "POST",
        url: "../insert.factor_manual.php",
        data: "url=" + bulkurl,
		async: false,
        success: function(status) { 
			var GetIndex = (index+1);
			//var GetIndex = status.substring(0,1);
			//alert(GetIndex);
			var GetMsg = status;
			//var GetMsg = status.substring(1,status.length);
			//alert(GetMsg);
			if(GetMsg=='red'){
				$('div#resultsDiv div:eq('+GetIndex+')').find('a#single_trust_result').html('<img src="../img/errorIcon.png" border = "0" /> Sorry! Trustworthy Factor (Not Saved)');
				$('div#resultsDiv div:eq('+GetIndex+')').find("h2").css({backgroundColor: GetMsg});
			}else if(GetMsg=='green'){
				$('div#resultsDiv div:eq('+GetIndex+')').find('a#single_trust_result').html('<img src="../img/success_icon.gif" border = "0" /> Wow! Trustworthy Factor (Has Been Saved Sucessfully)');
				$('div#resultsDiv div:eq('+GetIndex+')').find("h2").css({backgroundColor: GetMsg});
				}
				else if(GetMsg==''){
					$('div#resultsDiv div:eq('+GetIndex+')').find('a#single_trust_result').html('<img src="../img/errorIcon.png" border = "0" /> Sorry! Trustworthy Factor (Not Saved)');
					$('div#resultsDiv div:eq('+GetIndex+')').find("h2").css({backgroundColor: '#BE5858'});
}
		}
		});
		/* Call ajax End*/	
		i++;		
  		});		
		/*************************************/	
		$("#progress").html('');				
		$('#results').show();				
		}
		else{
			return false;
		}		
		});
	$('#submitButton').click(function(){
		var keywords     	= $('#s').attr('value'); 
		archive(keywords);		
		$('#results').hide();
	});
/* Here is Script for MYSQL Insert */
/***********Start Script**************************/
function archive(keywords) {
    $.ajax({ 
        type: "POST",
        url: "../insert.keyword.random.php",
        data: "keywords=" + keywords,
        success: function(status) {}
    });
}
/**********Close Script***************************/
/* Here is Script for MYSQL Insert */
/***********Start Script**************************/
function mysql(keywords, title, desc, url, realurl) {
    $.ajax({ 
        type: "POST",
        url: "../save-google-result.php",
        data: "keywords=" + keywords + "& title=" + title + "& desc=" + desc + "& url=" + url + "& realurl=" + realurl,
        success: function(status) {test(status);}
    });
}
/**********Close Script***************************/
</script>
<script>
/* Here is Code for MYSQL Factor */
/* Now We are not using this function */
/*************************************/
function insert_factor() {  
    $.ajax({
        type: "POST",
        url: "../insert.factor.php",
        data: "",
        success: function(status) {
			if(status=='')
			{
				alert("Sorry, Some url not saved. \n Please, go with manual option For This Page.");
				$("#progress2").html('');
			}else{
				alert(status);
				}
				$("#progress").html('');
				$('#results').show();
			}
    });
   }
/*************************************/
/* CLose Here*/
</script>
<script>
/* Here is Code for MYSQL Factor */
/*************************************/
/*$.fn.wait = function(time, type) {
        time = time || 20000;
        type = type || "fx";
        return this.queue(type, function() {
            var self = this;
            setTimeout(function() {
                $(self).dequeue();
            }, time);
        });
    };
    function runIt() {
      $("div").wait()
              .animate({left:'+=200'},2000)
              .wait()
              .animate({left:'-=200'},1500,runIt);
    }
    runIt();
	setTimeout ( expression, timeout );
	setInterval ( expression, interval );
*/
/*************************************/
/* CLose Here*/
</script>