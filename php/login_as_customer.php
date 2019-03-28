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
				$query = "SELECT * FROM ASS2_CUST";
				$result = mysql_query($query);
				
				echo "<form name='LoginForm' method='post' action='confirm_login.php'>";
				
				echo "<table>";
				echo "<tr><td></td><td><b>Username</b></td><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>Address</b></td><td><b>Phone No</b></td><td><b>Email</b></td></tr>";
				$i = 0;
				while($row=mysql_fetch_array($result)) {
					$username = $row['Username'];
					if($i == 0) {
						echo "<tr><td>" . "<input name='username' id='username' type='radio' value='$username' checked='checked'>" . "</td><td>" . $row['Username'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Address'] . "</td><td>" . $row['PhoneNo'] . "</td><td>" . $row['Email'] . "</td></tr>"; 
					} else {
						echo "<tr><td>" . "<input name='username' id='username' type='radio' value='$username'>" . "</td><td>" . $row['Username'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Address'] . "</td><td>" . $row['PhoneNo'] . "</td><td>" . $row['Email'] . "</td></tr>"; 
					}
					$i++;
				}
				echo "</table>";
				
				echo "<br/> <input name='submit' type='submit' value='Login'/>";
				echo "</form>";
			?>
			</div>
			
	</body>
	
	<footer> </footer>
	
</html>