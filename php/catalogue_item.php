<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Catalogue: Item <?php echo $_POST['item']; ?> </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>

	<body id="maincontent">

		<header>
			<h1> Catalogue: Item <?php echo $_POST['item']; ?> </h1>
		</header>

		<div class="menu">
			<?php include 'nav_element.php';?> <!-- adds nav menu -->
		</div>

		<div class="side">
			<div class="login">
				<?php include 'login_element.php';?> <!-- adds login element -->
			</div>

			<div class="lastsearch">
				<!-- adds last search element -->
				<?php
				$_SESSION['last_search'] = $_POST['item']; //sets last search picture to current search
				include 'last_search_element.php';
				?>
			</div>
		</div>

		<script type="text/javascript" src="../js/purchase.js"></script>

			<div class="content">

			<!-- adds weapon image -->
			<?php
				$_POST['itemid'] = $_POST['item']; //use itemid for last search element
				include 'display_product_image.php';
			?>

			<?php
				$host = "localhost";
				$user = "X31566009";
				$password = "secret";
				$dbc=mysql_pconnect($host,$user,$password);

				$dbname = "X31566009";
				mysql_select_db($dbname);
				$ItemID = $_POST['item'];
				$query = "SELECT * FROM ASS2_WEAPONS WHERE ItemID = '$ItemID'";
				$result = mysql_query($query);
				echo "<table>";
				while($row=mysql_fetch_array($result)) {

					echo "<tr><td><b>ItemID:</b></td><td>" . $row['ItemID'] . "</td></tr>";
					echo "<tr><td><b>Type:</b></td><td>" . $row['Type'] . "</td></tr>";
					echo "<tr><td><b>Style:</b></td><td>" . $row['Style'] . "</td></tr>";
					echo "<tr><td><b>Material:</b></td><td>" . $row['Material'] . "</td></tr>";
					echo "<tr><td><b>Wrap:</b></td><td>" . $row['Wrap'] . "</td></tr>";
					echo "<tr><td><b>Colour:</b></td><td>" . $row['Colour'] . "</td></tr>";
					echo "<tr><td><b>Build:</b></td><td>" . $row['Build'] . "</td></tr>";
					echo "<tr><td><b>Price:</b></td><td>" . "$" . $row['Price'] . "</td></tr>";
					echo "<tr><td><b>Stock:</b></td><td>" . $row['Stock'] . "</td></tr>";
					echo "<tr><td><b>Description:</b></td><td>" . $row['Description'] . "</td></tr>";

					$price = $row['Price'];
					$stock = $row['Stock'];
					$style = $row['Style'];

				}
				echo "</table>";
			?>

			<?php if($login_type == 'customer') { ?>

			<br/><br/>
			<form name="PurchaseForm" method="post" action="purchase.php">
				<input name="item" type="hidden" value="<?php echo $ItemID ?>"/>
				<input name="style" id="style" type="hidden" value="<?php echo $style ?>"/>
				Quantity: <input name="quantity" id="quantity" type="text" onKeyUp="ValidatePrice(this.form,<?php echo $price ?>)"/>
				<output type="text" id="totalprice" name="totalprice"></output> <br/>
				<input name="purchase" type="submit" value="Purchase" onclick="return ValidateQuantity(this.form,<?php echo $price ?>,<?php echo $stock ?>)"/>
			</form>

			<?php
			}
			$_SESSION['last_search']=$ItemID;
			?>

			</div>

			<footer>
			</footer>

	</body>



</html>
