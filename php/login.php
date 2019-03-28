<?php
	session_start(); // Starting Session
	$_SESSION['error'] = false; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		
		if(isset($_POST['usertype']) && $_POST['usertype'] == 'staff') {
			$usertype = 'staff';
		} else {
			$usertype = 'customer';
		}
		
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$_SESSION['error'] = true;
			header("location: home.php");
		} else {
			if($usertype == 'customer') {
				// Define $username and $password
				$username=$_POST['username'];
				$password=$_POST['password'];
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection = mysql_connect("localhost", "X31566009", "secret");
				// To protect MySQL injection for Security purpose
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysql_real_escape_string($username);
				$password = mysql_real_escape_string($password);
				// Selecting Database
				$db = mysql_select_db("X31566009", $connection);
				// SQL query to fetch information of registerd users and finds user match.
				$query = mysql_query("select * from ASS2_CUST where Password='$password' AND Username='$username'", $connection);
				$rows = mysql_num_rows($query);
				if ($rows == 1) {
					$_SESSION['login_user']=$username; // Initializing Session
					$_SESSION['login_type']='customer';
					unset($_SESSION['last_search']); 
					header("location: home.php"); // Redirecting To Other Page
				} else {
					$_SESSION['error'] = true;
					header("location: home.php");
				}
			} else if ($usertype == 'staff') {
				// Define $username and $password
				$username=$_POST['username'];
				$password=$_POST['password'];
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection = mysql_connect("localhost", "X31566009", "secret");
				// To protect MySQL injection for Security purpose
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysql_real_escape_string($username);
				$password = mysql_real_escape_string($password);
				// Selecting Database
				$db = mysql_select_db("X31566009", $connection);
				// SQL query to fetch information of registerd users and finds user match.
				$query = mysql_query("select * from ASS2_STAFF where Password='$password' AND Username='$username'", $connection);
				$rows = mysql_num_rows($query);
				if ($rows == 1) {
					$_SESSION['login_user']=$username; // Initializing Session
					$_SESSION['login_type']='staff';
					unset($_SESSION['last_search']); 
					header("location: home.php"); // Redirecting To Other Page
				} else {
					$_SESSION['error'] = true;
					header("location: home.php");
				}
			}
			mysql_close($connection); // Closing Connection
		}
	} else {
		$_SESSION['login_user']='Guest'; // Initializing Session
		$_SESSION['login_type']='guest';
		header("location: home.php");
	}
?>