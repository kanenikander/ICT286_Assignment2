<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Login As Customer </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<h1> Login As Customer </h1>
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
				$cust_username = $_POST['username'];
				$query = "SELECT * FROM ASS2_CUST WHERE Username = '$cust_username'";
				$result = mysql_query($query);
				
				echo "<form name='LoginForm' method='post' action='login.php'>";
				echo "<table>";
				while($row=mysql_fetch_array($result)) {	
					echo "<tr><td><b>Username</b></td><td>" . $row['Username'] . "</td></tr>";
					echo "<tr><td><b>FirstName</b></td><td>" . $row['FirstName']  . "</td></tr>";
					echo "<tr><td><b>LastName</b></td><td>" . $row['LastName'] . "</td></tr>";
					echo "<tr><td><b>Address</b></td><td>" . $row['Address'] . "</td></tr>";
					echo "<tr><td><b>PhoneNo</b></td><td>" . $row['PhoneNo'] . "</td></tr>";
					echo "<tr><td><b>Email</b></td><td>" . $row['Email'] . "</td></tr>";
					
					$cust_password = $row['Password'];
					echo "<input name='username' type='hidden' value='$cust_username'/>";
					echo "<input name='password' type='hidden' value='$cust_password'/>";
					echo "<input name='usertype' type='hidden' value='customer'/>";
				}
				echo "</table>";
				echo "<br/>";				
				echo "Are you sure you want to login into this account?<br/>";
				echo "<br/>";
				echo "<input name='submit' type='submit' value='Login'/>";
				echo "</form>";
				echo "<form action='login_as_customer.php'>";
				echo "<button type='submit' value='submit'>Go Back</button>";
				echo "</form>";
			?>
			</div>
			
	</body>
	
	<footer> </footer>
		
</html>