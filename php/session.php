<?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "X31566009", "secret");
	// Selecting Database
	$db = mysql_select_db("X31566009", $connection);
	session_start();// Starting Session
	
	if(!(isset($_SESSION['login_type']))) {
		header('Location: login.php');
	} else {
		$login_type=$_SESSION['login_type']; //get session type
		if($login_type == 'guest') {
			$login_session = 'Guest';
		} else if($login_type == 'customer') {
			// Storing Session
			$user_check=$_SESSION['login_user'];
			// SQL Query To Fetch Complete Information Of User
			$ses_sql=mysql_query("select Username from ASS2_CUST where Username='$user_check'", $connection);
			$row = mysql_fetch_assoc($ses_sql);
			$login_session =$row['Username'];
			if(!isset($login_session)){
				mysql_close($connection); // Closing Connection
				header('Location: home.php'); // Redirecting To Home Page
			}
		} else if($login_type == 'staff') {
			// Storing Session
			$user_check=$_SESSION['login_user'];
			// SQL Query To Fetch Complete Information Of User
			$ses_sql=mysql_query("select Username from ASS2_STAFF where Username='$user_check'", $connection);
			$row = mysql_fetch_assoc($ses_sql);
			$login_session =$row['Username'];
			if(!isset($login_session)){
				mysql_close($connection); // Closing Connection
				header('Location: home.php'); // Redirecting To Home Page
			}
		}
	}
?>