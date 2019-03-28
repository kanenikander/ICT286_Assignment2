<?php
	$host = "localhost";
	$user = "X31566009";
	$password = "secret";
	$dbc=mysql_pconnect($host,$user,$password);
				
	$dbname = "X31566009";
	mysql_select_db($dbname);
	
	$login_type = $_POST['logintype'];		
	
	$username = $_POST['username'];	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$phoneno = $_POST['phoneno'];
	$email = $_POST['email'];
		
	$query = "UPDATE ASS2_CUST SET FirstName = '$firstname', LastName = '$lastname', Address = '$address', PhoneNo = '$phoneno', Email = '$email' WHERE Username = '$username'"; 	
	$result = mysql_query($query);
	header("location: home.php"); 
?>