<?php
	$host = "localhost";
	$user = "X31566009";
	$password = "secret";
	$dbc=mysql_pconnect($host,$user,$password);
				
	$dbname = "X31566009";
	mysql_select_db($dbname);
				
	$type = $_POST['type'];
	$style = $_POST['style'];
	$material = $_POST['material'];
	$wrap = $_POST['wrap'];
	$colour = $_POST['colour'];
	$build = $_POST['build'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$description = $_POST['description'];
	
	$query = "INSERT INTO ASS2_WEAPONS SET Type = '$type', Style = '$style', Material = '$material', Wrap = '$wrap', Colour = '$colour', Build = '$build', Price = '$price', Stock = '$stock', Description = '$description'";			
	$result = mysql_query($query);
	header("location: home.php"); 
?>