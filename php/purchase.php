<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Item: <?php echo $_POST['item']; ?> </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<h1> Item: <?php echo $_POST['item']; ?> </h1>
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
				$ItemID = $_POST['item'];
				$Quantity = (int)$_POST['quantity'];
				
				$host = "localhost";
				$user = "X31566009";
				$password = "secret";
				$dbc=mysql_pconnect($host,$user,$password);
				
				$dbname = "X31566009";
				mysql_select_db($dbname);
				
				$query = "SELECT * FROM ASS2_WEAPONS WHERE ItemID = '$ItemID'"; 
				$result = mysql_query($query);
				
				while($row=mysql_fetch_array($result)) {
					$totalprice = (float)$row['Price'] * $Quantity;
					$newstock = (int)$row['Stock'] - $Quantity;
				}
				$currentdate = date('Y-m-d');
				
				//adjust stock levels to account for purchase
				$query = "UPDATE ASS2_WEAPONS SET Stock = '$newstock' WHERE ItemID = '$ItemID'"; 
				$result = mysql_query($query);
				
				//add order details to table
				$query = "INSERT INTO ASS2_ORDERS (ItemID, Username, Quantity, TotalPrice, DateOfPurchase) VALUES ('$ItemID', '$login_session', '$Quantity', '$totalprice', '$currentdate')"; 
				$result = mysql_query($query);
				
				//get latest order id number
				$query = "SELECT MAX(OrderID) AS Max FROM ASS2_ORDERS";
				$result = mysql_query($query);
				$row=mysql_fetch_array($result);
				$latestorderid = $row['Max'];
				
				
				//prepare purchase details for receipt
				$query = "SELECT * FROM ASS2_ORDERS WHERE OrderID = '$latestorderid'"; 
				$result = mysql_query($query);
				
				echo "You have successfully placed an order. Your receipt details are as folows: <br/>";
				
				while($row=mysql_fetch_array($result)) {
					echo "OrderID: " . $row['OrderID'] . "<br/>";
					echo "ItemID: " . $row['ItemID'] . "<br/>";
					echo "Username: " . $row['Username'] . "<br/>";
					echo "Quantity: " . $row['Quantity'] . "<br/>";
					echo "Total Price: " . "$" . $row['TotalPrice'] . "<br/>";
					echo "Date Purchased: " . $row['DateOfPurchase'] . "<br/>";
				}
			?>
			<br/>
			<form action='catalogue.php'>
			<button type='submit' value='submit'>Return To Catalogue</button>
			</form>
			
			</div>
			
	</body>
	
	<footer> </footer>
	
</html>