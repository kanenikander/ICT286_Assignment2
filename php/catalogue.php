<?php
	include 'session.php';
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Catalogue </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>

	<body id="maincontent">

		<header>
			<h1> Catalogue </h1>
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

		<div class="content">
			<h2> Keyword Search </h2>
			<?php
				$host = "localhost";
				$user = "X31566009";
				$password = "secret";
				$dbc=mysql_pconnect($host,$user,$password);

				$dbname = "X31566009";
				mysql_select_db($dbname);

				echo "<form name='KeywordSearch' method='post' action='catalogue_keyword_search.php'>";
				echo "<label for='keyword'>Keyword</label>";
				echo "Enter Keyword: <input type='text' name='keyword' id='keyword'/>";
				echo "<input name='purchase' type='submit' value='Search'/>";
				echo "</form>";
			?>

			<h2> Category Search </h2>
			<?php
				$host = "localhost";
				$user = "X31566009";
				$password = "secret";
				$dbc=mysql_pconnect($host,$user,$password);

				$dbname = "X31566009";
				mysql_select_db($dbname);
				$query = "SELECT Type FROM ASS2_WEAPONS GROUP BY Type";
				$result = mysql_query($query);

				echo "<form name='CategorySearch' method='post' action='catalogue_search.php'>";
				$image = "../images/All.png";
				echo "<input type='submit' class='catagorybutton' id='categorybutton' name='type' value='All' style='background: url($image) no-repeat; background-size: 200px 200px;'/>";
				while($row=mysql_fetch_array($result)) {
					$temp = $row['Type'];
					$image = "../images/$temp.png";
					echo "<input type='submit' class='catagorybutton' id='categorybutton$temp' name='type' value='$temp' style='background: url($image) no-repeat; background-size: 200px 200px;'/>";
				}
				echo "</form>";
			?>
		</div>

		<footer>
		</footer>

	</body>

</html>
