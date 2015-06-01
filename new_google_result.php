<?php include('connection/config.php');
$query2= mysql_query("SELECT * FROM google_result where rand_id='".$_REQUEST['randid']."'") or die(mysql_error());
while($result2 = mysql_fetch_array($query2))
{
?>
<div class="webResult">
<h2><a href="<?= $result2['realurl'];?>" target="_blank"><?= strip_tags($result2['title']);?></a></h2>
<p><?= strip_tags($result2['description']);?></p>
<a href="<?= $result2['realurl'];?>" target="_blank"><?= $result2['url'];?></a>
</div> 
<?php }?>
