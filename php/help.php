<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Help </title>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<header> 
		<h1> Help </h1>
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
				<div class="help">
				<h2> How to use this site: </h2>
				<h3> Catalogue </h3>
				Browse through our diverse range of weapons, armaments and accessories here. You can look for items specifically with a keyword search or view items based on their category. Both search methods will produce a list of items accordingly allowing you to select an item by pressing its ‘ItemID’. This will produce the full details of the item and its image. If you are logged into your customer account you can then purchase the item by entering your desired quantity of the item and pressing ‘Purchase’. <br/>
				<img src='../images/help_catalogue.gif' alt='Catalogue' />
				<?php
					if($login_type == 'customer') {
						echo "<h3> Orders </h3>";
						echo "A list of your orders and their details can be viewed here. \n\n";
						echo "<img src='../images/help_orders.gif' alt='Orders' />";
						echo "<h3> Account </h3>";
						echo "View and edit your account details here. Change any fields as desired then press ‘Edit Account’ to commit those changes. \n\n";
						echo "<img src='../images/help_account.gif' alt='Account' />";
					} else if($login_type == 'staff') {
						echo "<h3> Add Product </h3>";
						echo "Add a new product here. Fill in the details of the new product in all the fields and press ‘Add Item’ to add the new product. The new item should now show up in the catalogue. \n\n";
						echo "<img src='../images/help_add_product.gif' alt='Add Product' />";
						echo "<h3> Login As Customer </h3>";
						echo "You can login to a customer account without a password here. Simply select the customer you wish to login as and press ‘Login’. You will be asked if you are sure you want to login to this account. To continue, press ‘Login’ once more.\n\n";
						echo "<img src='../images/help_login_as_customer.gif' alt='Login As Customer'  />";
						echo "<h3> Orders </h3>";
						echo "A list of all orders and their details can be viewed here. \n\n";
						echo "<img src='../images/help_orders.gif' alt='Orders' />";
						echo "<h3> Create Staff </h3>";
						echo "You can create a new staff account by pressing ‘Create Staff’ on the login menu. Enter your desired username and password in the appropriate fields then press ‘Create Customer’ to make your new account. You can now login via the login menu to access your account. \n\n";
						echo "<img src='../images/help_create_staff.gif' alt='Create Staff' />";
					} else {
						echo "<h3> Create Customer </h3>";
						echo "You can create a new customer account by pressing ‘Create Customer’ on the login menu. Enter your details in all the fields and press ‘Create Customer’ to make your new account. You can now login via the login menu to access your account. \n\n";
						echo "<img src='../images/help_create_customer.gif' alt='Create Customer' />";
					}
					echo "<h3> Site Map </h3>";
					echo "You can view the overall layout of the website here. \n\n";
					echo "<img src='../images/help_site_map.gif' alt='Site Map' />";
				?>
				</div>
			</div>
		
	</body>
	
	<footer> </footer>
	
</html>