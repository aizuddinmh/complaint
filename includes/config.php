<?php
	$dbc = @mysql_connect('localhost','root','') or die('ERROR CONNECTION' . mysql_error());
	mysql_select_db('complaint') or die('ERROR SELECT DB' . mysql_error());
?>