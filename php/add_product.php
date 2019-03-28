<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Add Product </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<h1> Add Product </h1>
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
	
	<script type="text/javascript" src="../js/products.js"></script>
	
	<body id="maincontent">
	
			<div class="content">
			
				<form name="CategorySearch" method="post" action="add_product_commit.php">
				
				<table>
				<tr><td><b>ItemID</b></td><td>******</td></tr>
				<tr><td><b>Type</b></td><td><input type="text" name="type" placeholder="Type"></td></tr>
				<tr><td><b>Style</b></td><td><input type="text" name="style" placeholder="Style"></td></tr>
				<tr><td><b>Material</b></td><td><input type="text" name="material" placeholder="Material"></td></tr>
				<tr><td><b>Wrap</b></td><td><input type="text" name="wrap" placeholder="Wrap"></td></tr>
				<tr><td><b>Colour</b></td><td><input type="text" name="colour" placeholder="Colour"></td></tr>
				<tr><td><b>Build</b></td><td><input type="text" name="build" placeholder="Build"></td></tr>
				<tr><td><b>Price</b></td><td><input type="text" name="price" placeholder="Price"></td></tr>
				<tr><td><b>Stock</b></td><td><input type="text" name="stock" placeholder="Stock"></td></tr>
				<tr><td><b>Description</b></td><td><input type="text" name="description" placeholder="Description"></td></tr>
				</table>
				
				<br/> <input name="submit" type="submit" value="Add Item" onclick="return ValidateItem(this.form)"/>
				<input type="reset" value="Reset"/>
				</form>
			
			</div>

	</body>
		
	<footer> </footer>
	
</html>