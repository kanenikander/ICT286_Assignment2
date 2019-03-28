<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Catalogue: Item <?php echo $_SESSION['last_search']; ?> </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<h1> Catalogue: 
			<?php 
				if(empty($_SESSION['last_search'])) {
					echo "Not Found";
				} else {
					echo "Item " . $_SESSION['last_search'];
				}
			?>
		</h1>
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
	
	<?php
		$host = "localhost";
		$user = "X31566009";
		$password = "secret";
		$dbc=mysql_pconnect($host,$user,$password);
				
		$dbname = "X31566009";
		mysql_select_db($dbname);
		$ItemID = $_SESSION['last_search'];
		$query = "SELECT * FROM ASS2_WEAPONS WHERE ItemID = '$ItemID'";
		$result = mysql_query($query);
		while($row=mysql_fetch_array($result)) {
			$price = $row['Price'];
			$stock = $row['Stock'];
		}
	?>
	
	<script type="text/javascript" src="../js/purchase.js"></script>
	
	<body id="maincontent">
	
		<div class="content">
			
			<?php
				if(!empty($_SESSION['last_search'])) {
					$_POST['itemid'] = $_SESSION['last_search'];
					include 'display_product_image.php';
				}
			?>
			
			<?php
				if(empty($_SESSION['last_search'])) {
					echo "The item you have requested no longer seems to be in our database. <br>";
					echo "Please select an item from our catalogue page.";
				} else {
					$host = "localhost";
					$user = "X31566009";
					$password = "secret";
					$dbc=mysql_pconnect($host,$user,$password);
						
					$dbname = "X31566009";
					mysql_select_db($dbname);
					$ItemID = $_SESSION['last_search'];
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
							 
						$stock = $row['Stock']; //to set max for customers ordering
						$price = $row['Price'];
						$style = $row['Style'];
							
					}
					echo "</table>";
					
					if(mysql_num_rows($result) == 0) { //if there are no rows to view
						echo "The item you have requested no longer seems to be in our database. <br>";
						echo "Please select an item from our catalogue page.";
					}
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
						
				} 
				?>
			
		</div>
			
	</body>
	
	<footer> </footer>
	
</html>