<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Catalogue: <?php echo $_POST['type']; ?> </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>

	<body id="maincontent">

		<header>
			<h1> Catalogue: <?php echo $_POST['type']; ?> </h1>
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
		<?php
			$host = "localhost";
			$user = "X31566009";
			$password = "secret";
			$dbc=mysql_pconnect($host,$user,$password);

			$dbname = "X31566009";
			mysql_select_db($dbname);
			$type = $_POST['type']; //type is submited from type buttons
			if($type == 'All')
				$query = "SELECT * FROM ASS2_WEAPONS";
			else
				$query = "SELECT * FROM ASS2_WEAPONS WHERE Type = '$type'";

			$result = mysql_query($query);

			echo "<form name='CategorySearch' method='post' action='catalogue_item.php'>";

			echo "<table>";
			echo "<tr><td><b>ItemID</b></td><td><b>Type</b></td><td><b>Style</b></td><td><b>Material</b></td><td><b>Wrap</b></td><td><b>Colour</b></td><td><b>Build</b></td><td><b>Price</b></td><td><b>Stock</b></td><td><b>Description</b></td></tr>";
			while($row=mysql_fetch_array($result)) {
				$temp = $row['ItemID'];
				echo "<tr><td>" . "<input type='submit' name='item' value='$temp' />" . "</td><td>" . $row['Type'] . "</td><td>" . $row['Style'] . "</td><td>" . $row['Material'] . "</td><td>" . $row['Wrap'] . "</td><td>" . $row['Colour'] . "</td><td>" . $row['Build'] . "</td><td>" . "$" . $row['Price'] . "</td><td>" . $row['Stock'] . "</td><td>" . $row['Description'] . "</td></tr>";
			}
			echo "</table>";
			echo "</form>";
		?>
		</div>

		<footer>
		</footer>

	</body>

</html>
