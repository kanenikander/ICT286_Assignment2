<?php
	if(!empty($_SESSION['last_search'])) {
		$_POST['itemid'] = $_SESSION['last_search'];
		echo "<br/>Item: " . $_POST['itemid'];
		include 'display_product_image.php';
		echo "<form action='last_search.php'>";
		echo "<button type='submit' value='submit'>Last Search</button>";
		echo "</form>";
		echo "<br/>";
	}
?>
