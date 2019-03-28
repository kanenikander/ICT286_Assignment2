<?php
echo "<ul>";
echo "<li><a href='home.php'>Home</a></li>";
echo "<li><a href='catalogue.php'>Catalogue</a></li>";
if($login_type == 'customer') {
	echo "<li><a href='orders.php'>Orders</a></li>";
	echo "<li><a href='account.php'>Account</a></li>";
} else if($login_type == 'staff') {
	echo "<li><a href='add_product.php'>Add Product</a></li>";
	echo "<li><a href='login_as_customer.php'>Login As Customer</a></li>";
	echo "<li><a href='orders.php'>Orders</a></li>";
}
echo "<li><a href='site_map.php'>Site Map</a></li>";
echo "<li><a href='help.php'>Help</a></li>";
echo "<li><a href='contact_us.php'>Contact Us</a></li>";
echo "</ul>";
?>
