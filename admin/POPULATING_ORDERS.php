<?php
	//code for resetting and repopulating table
	
	$host = "localhost";
	$user = "X31566009";
	$password = "secret";
	$dbc=mysql_pconnect($host,$user,$password);
				
	$dbname = "X31566009";
	mysql_select_db($dbname);
	
	$query = "DELETE FROM ASS2_ORDERS"; //clears table of all existing records
	if(mysql_query($query)) {
		echo "success!<br/>";
	} else {
		echo "failure!<br/>";
	}
	
	$query = "ALTER TABLE ASS2_ORDERS AUTO_INCREMENT=1"; //resets auto increment of primary key
	if(mysql_query($query)) {
		echo "success!<br/>";
	} else {
		echo "failure!<br/>";
	}
?>