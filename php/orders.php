<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Orders </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>

	<header>
		<h1> Orders </h1>
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
				if($login_type == 'customer') {
					$query = "SELECT O.*, W.Build, W.Style FROM ASS2_ORDERS O, ASS2_WEAPONS W WHERE O.Username = '$login_session' AND O.ItemID = W.ItemID";
				} else if($login_type == 'staff') {
					$query = "SELECT O.*, W.Build, W.Style FROM ASS2_ORDERS O, ASS2_WEAPONS W WHERE O.ItemID = W.ItemID";
				}

				$result = mysql_query($query);

				if(mysql_num_rows($result) == 0) { //if there are no rows to view
					echo "The are no orders that can be viewed right now. <br>";
					if($login_type == 'customer') {
						echo "Orders will be displayed here once you have made a purchase. <br>";
					} else if($login_type == 'staff') {
						echo "Orders will be displayed here once a customer has made a purchase. <br>";
					}
				} else {
					echo "<table>";
					echo "<tr><td><b>OrderID</b></td><td><b>ItemID</b></td><td><b>Item</b></td>";
					if($login_type == 'staff') {
						echo "<td><b>Buyer</b></td>";
					}
					echo "<td><b>Quantity</b></td><td><b>Total Price</b></td><td><b>Date Purchased</b></td></tr>";
					while($row=mysql_fetch_array($result)) {
						echo "<tr><td>" . $row['OrderID'] . "</td><td>" . $row['ItemID'] . "</td><td>" . $row['Build'] . " " . $row['Style'] . "</td><td>";
						if($login_type == 'staff') {
							echo $row['Username'] . "</td><td>";
						}
						echo $row['Quantity'] . "</td><td>" . "$" . $row['TotalPrice'] . "</td><td>" . $row['DateOfPurchase'] . "</td></tr>";
					}
					echo "</table>";
				}

			?>
			</div>

	</body>

	<footer> </footer>

</html>
