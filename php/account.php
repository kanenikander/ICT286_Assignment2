<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Account </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<h1> Account </h1>
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
	
	<script type="text/javascript" src="../js/accounts.js"></script>
	
	<body id="maincontent">
		
			<div class="content">
			
			<?php
				$host = "localhost";
				$user = "X31566009";
				$password = "secret";
				$dbc=mysql_pconnect($host,$user,$password);
				
				$dbname = "X31566009";
				mysql_select_db($dbname);
				
				$query = "SELECT * FROM ASS2_CUST WHERE Username = '$login_session'";
				$result = mysql_query($query);
					
			?>
				<form name="CategorySearch" method="post" action="account_edit.php">
				<table>
			<?php
					
				while($row=mysql_fetch_array($result)) {
					$password = $row['Password'];
					$firstname = $row['FirstName'];
					$lastname = $row['LastName'];
					$address = $row['Address'];
					$phoneno = $row['PhoneNo'];
					$email = $row['Email'];
					echo "<tr><td><b>Username:</b></td><td>" . $row['Username'] . "</td></tr>";
					echo "<tr><td><b>Password:</b></td><td>" . "******" . "</td></tr>";
					echo "<tr><td><b>FirstName:</b></td><td>" . "<input type='text' name='firstname' value='$firstname'>" . "</td></tr>";
					echo "<tr><td><b>LastName:</b></td><td>" . "<input type='text' name='lastname' value='$lastname'>" . "</td></tr>";
					echo "<tr><td><b>Address:</b></td><td>" . "<input type='text' name='address' value='$address'>" . "</td></tr>";
					echo "<tr><td><b>PhoneNo:</b></td><td>" . "<input type='text' name='phoneno' value='$phoneno'>" . "</td></tr>";
					echo "<tr><td><b>Email:</b></td><td>" . "<input type='text' name='email' value='$email'>" . "</td></tr>";
				}
				echo "</table>";
					
			?>
				<br/> 
				<input name="submit" type="submit" value="Edit Account" onclick="return ValidateCustomer(this.form)" />
				<input type="reset" value="Reset" />
				<input type="hidden" name="username" value="<?php echo $login_session ?>" />
				<input type="hidden" name="password" value="$password" />
				<input type="hidden" name="logintype" value="<?php echo $login_type ?>" />
				</form>
				
			</div>

	</body>
	
	<footer> </footer>
	
</html>