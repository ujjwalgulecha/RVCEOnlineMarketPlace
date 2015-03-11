<?php

$con = mysql_connect("localhost", "root", "root");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
$db_selected = mysql_select_db("MarketPlace",$con);
$ad_id=$_GET['id'];
		$qry="delete from ad where ad_id='$ad_id'";
		$result = mysql_query($qry,$con);
$qry="delete from image where ad_id='$ad_id'";
$result = mysql_query($qry,$con);
echo '<meta http-equiv="refresh" content="0;URL=ad_general.php">';


?>


