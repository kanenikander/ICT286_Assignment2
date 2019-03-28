<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
		if($login_type == 'guest' || empty($login_type)) {
			echo "<title> Create Customer </title>";
		} else if($login_type == 'staff') {
			echo "<title> Create Staff </title>";
		}
		?>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<?php
		if($login_type == 'guest' || empty($login_type)) {
			echo "<h1> Create Customer </h1>";
		} else if($login_type == 'staff') {
			echo "<h1> Create Staff </h1>";
		}
		?>
	</header>
	
	<div class="menu">
		<?php include 'nav_element.php';?> <!-- adds nav menu -->
	</div>
	
	<div class="side">
	<div class="login">
		<?php include 'login_element.php';?> <!-- adds login element -->
	</div>
	
	<div class="lastsearch">
		<?php include 'last_search_element.php';?> <!-- adds last search element -->
	</div>
	</div>
	
	<body id="maincontent">
	
			<div class="content">
			
			<?php
				$host = "localhost";
				$user = "X31566009";
				$password = "secret";
				$dbc=mysql_pconnect($host,$user,$password);
							
				$dbname = "X31566009";
				mysql_select_db($dbname);
							
				$username = $_POST['username'];
				$password = $_POST['password'];		
				
				if($login_type == 'guest' || empty($login_type)) {
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$address = $_POST['address'];
					$phoneno = $_POST['phoneno'];
					$email = $_POST['email'];
					
					$query = "INSERT INTO ASS2_CUST (Username, Password, FirstName, LastName, Address, PhoneNo, Email) VALUES ('$username', '$password', '$firstname', '$lastname', '$address', '$phoneno', '$email')";
				} else if($login_type == 'staff') {
					$query = "INSERT INTO ASS2_STAFF (Username, Password) VALUES ('$username', '$password')";
				}
				
				if(mysql_query($query)) {
					echo "You have succesfully created an account for user: $username.";
					echo "<form action='home.php'>";
					echo "<button type='submit' value='submit'>Return To Home</button>";
					echo "</form>";
				} else {
					echo "An account already exists for the user: $username. Please try again with a different username.";
					echo "<br/><br/>";
					echo "<form action='create_account.php'>";
					echo "<button type='submit' value='submit'>Try Again</button>";
					echo "</form>";
				}
			?>
				
			</div>
			
	</body>
	
	<footer> </footer>
	
</html>