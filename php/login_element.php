<?php
	echo "<div class='welcome'>";
	if($login_type == 'guest' || empty($login_type)) {
		echo "<form name='LoginForm' method='post' action='login.php'>";
		echo "Welcome, " . $login_session . "!<br/>";
		echo "<label for='name'>Name</label>";
		echo "<input id='name' name='username' placeholder='username' type='text' />";
		echo "\n";
		echo "<label for='password'>Password</label>";
		echo "<input id='password' name='password' placeholder='password' type='password' />";
		echo "\n";
		echo "Login as staff  ";
		echo "<input type='checkbox' name='usertype' id='usertype' value='staff' />";
		echo "<label for='usertype'>UserType</label>";
		echo "\n";
		echo "<input name='submit' type='submit' value='Login'/>";
		echo "<input type='reset' value='Reset'/>";
		if($_SESSION['error'] == true || !(isset($_SESSION['error']))) {
			echo "<br /> Username or Password <br/> is invalid";
			$_SESSION['error'] = false;
		}
		echo "</form>";
		if($login_type == 'guest' || empty($login_type)) {
			echo "<form action='create_account.php'>";
			echo "<button type='submit' value='submit'>Create Customer</button>";
			echo "</form>";
		}
	} else {
		echo "<form name='LoginForm' action='logout.php'>";
		echo "Welcome, " . $login_session . "!<br/>";
		echo "<input type='submit' value='Logout'/>";
		echo "</form>";
		if($login_type == 'staff') {
			echo "<form action='create_account.php'>";
			echo "<button type='submit' value='submit'>Create Staff</button>";
			echo "</form>";
		}
	}
	echo "</div>";
?>
