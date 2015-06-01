<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Enhanced Trustworthy and High-Quality Information Retrieval system for Web Search Engines</title>
<script src="js/jquery-1.4.4.min.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<!--[if IE ]>
<style>#page{margin-left:160px}</style>
<![endif]-->

</head>
<body>
<!--id="page" Start-->
<div id="page">
	<h1>&nbsp;</h1>
	<form id="searchForm" method="post">
		<fieldset>
			<input id="s" type="text" value=""/>
			<input type="submit" value="Submit" id="submitButton"/>	
            <div id="progress"></div>			
		</fieldset>        
	</form>    
	<div id="resultsDiv">
	</div>
</div>
<!--id="page" End Here-->
<script>
/* Here is Script for MYSQL Insert */
/***********Start Script**************************/
function mysql(keywords, title, desc, url, realurl) {
    $.ajax({ 
        type: "POST",
        url: "save-google-result.php",
        data: "keywords=" + keywords + "& title=" + title + "& desc=" + desc + "& url=" + url + "& realurl=" + realurl,
        success: function(status) {insert_factor(status)}
    });
}
/**********Close Script***************************/
</script>

<script>
/* Here is Code for MYSQL Factor */
/*************************************/
function insert_factor(sendurl) { //alert(sendurl);   
    $.ajax({
        type: "POST",
        url: "insert.factor.php",
        data: "sendurl=" + sendurl,
        success: function(status) {$("#progress").html('');}
    });
   }
/*************************************/
/* CLose Here*/
</script>
</body>
</html>