<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Catalogue: <?php echo $_POST['keyword']; ?> </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<h1> Catalogue: <?php echo $_POST['keyword']; ?> </h1>
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
				$keyword = $_POST['keyword'];
				$query = "SELECT * FROM ASS2_WEAPONS WHERE Type LIKE '%$keyword%' OR Style LIKE '%$keyword%' OR Material LIKE '%$keyword%' OR Wrap LIKE '%$keyword%' OR Colour LIKE '%$keyword%' OR Build LIKE '%$keyword%' OR Description LIKE '%$keyword%'";
				$result = mysql_query($query);
				
				if(mysql_num_rows($result) == 0) { //if there are no rows to view
					echo "Your query has returned no results. <br/>";
					echo "Please try again. <br/><br/>";
					echo "<form action='catalogue.php'>";
					echo "<button type='submit' value='submit'>Go Back</button>";
					echo "</form>";
				} else {
					echo "<form name='CategorySearch' method='post' action='catalogue_item.php'>";
					echo "<table>";
					echo "<tr><td><b>ItemID</b></td><td><b>Type</b></td><td><b>Style</b></td><td><b>Material</b></td><td><b>Wrap</b></td><td><b>Colour</b></td><td><b>Build</b></td><td><b>Price</b></td><td><b>Stock</b></td><td><b>Description</b></td></tr>";
					while($row=mysql_fetch_array($result)) {
						$temp = $row['ItemID'];
						echo "<tr><td>" . "<input type='submit' name='item' value='$temp' action='catalogue_item.php'/>" . "</td><td>" . $row['Type'] . "</td><td>" . $row['Style'] . "</td><td>" . $row['Material'] . "</td><td>" . $row['Wrap'] . "</td><td>" . $row['Colour'] . "</td><td>" . $row['Build'] . "</td><td>" . "$" . $row['Price'] . "</td><td>" . $row['Stock'] . "</td><td>" . $row['Description'] . "</td></tr>"; 
					}
					echo "</table>";
					echo "</form>";
				}
			?>
			</div>
		
	</body>

	<footer> </footer>
	
</html>