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
	
	<script type="text/javascript" src="../js/accounts.js"></script>
	
	<body id="maincontent">
			
			<div class="content">
			<?php
				echo "Please enter your information: <br/>";
				
				if($login_type == 'guest' || empty($login_type)) {
					?>
					<form name="CreateCustomer" method="post" action="create_account_commit.php">
					
					<table>
					<tr><td><b>Username:</b></td><td><input type="text" name="username" placeholder="Username" /></td></tr>
					<tr><td><b>Password:</b></td><td><input type="password" name="password" placeholder="Password" /></td></tr>
					<tr><td><b>First Name:</b></td><td><input type="text" name="firstname" placeholder="FirstName" /></td></tr>
					<tr><td><b>Last Name:</b></td><td><input type="text" name="lastname" placeholder="LastName" /></td></tr>
					<tr><td><b>Address:</b></td><td><input type="text" name="address" placeholder="Address" /></td></tr>
					<tr><td><b>Phone No:</b></td><td><input type="text" name="phoneno" placeholder="PhoneNo" /></td></tr>
					<tr><td><b>Email:</b></td><td><input type="text" name="email" placeholder="Email" /></td></tr>
					</table>
					
					<br/>
					<input name="submit" type="submit" value="Create Customer" onclick="return ValidateCustomer(this.form)"/>
					<input type="reset" value="Reset"/>
					</form>
					<?php
				} else if($login_type == 'staff') {
					?>
					<form name="CreateStaff" method="post" action="create_account_commit.php">
					
					<table>
					<tr><td><b>Username:</b></td><td><input type="text" name="username" placeholder="Username"></td></tr>
					<tr><td><b>Password:</b></td><td><input type="password" name="password" placeholder="Password"></td></tr>
					</table>
					
					<br/> 
					<input name="submit" type="submit" value="Create Staff" onclick="return ValidateStaff(this.form)"/>
					<input type="reset" value="Reset"/>
					</form>
					<?php
				}
				?>
			</div>
			
	</body>
	
	<footer> </footer>
	
</html>