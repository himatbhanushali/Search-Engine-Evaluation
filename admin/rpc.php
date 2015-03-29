<?
	include('connection/config.php');
		if(isset($_POST['queryString'])) {
		$queryString = $_POST['queryString'];		
			if(strlen($queryString) >0) {
				$queryauto = "SELECT compname FROM currentopenings WHERE compname  LIKE '$queryString%' LIMIT 10";
				$resultauto = mysql_query($queryauto) or die("There is an error in database please contact support@ExploreMyBlog.Com");
					while($rowauto = mysql_fetch_array($resultauto)){
					echo '<li onClick="fill(\''.$rowauto[compname].'\');">'.$rowauto[compname].'</li>';                                         
      }
	  }
	  }
?>