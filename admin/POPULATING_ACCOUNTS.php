<?php
	//code for resetting and repopulating table
	
	$host = "localhost";
	$user = "X31566009";
	$password = "secret";
	$dbc=mysql_pconnect($host,$user,$password);
				
	$dbname = "X31566009";
	mysql_select_db($dbname);
	
	$query = "DELETE FROM ASS2_CUST"; //clears table of all existing records
	$result = mysql_query($query);
	
	$query = "DELETE FROM ASS2_STAFF"; //clears table of all existing records
	$result = mysql_query($query);
	
	$custfn = array("Greg", "Ben", "Suzie", "Max", "Harold", "Trevor", "Baz");
	$custln = array("Realname", "Richards", "White", "Bobbery", "Hammond", "Spencer", "Trump");
	$custad = array("92, Girvan Grove, Fremantle, WA, 6160", "32, Peterho Boulevard, Murdoch, WA, 6150", "27, Carba Road, Fremantle, WA, 6160", "61, Spring Creek Road, Murdoch, WA, 6150", "37, Norton Street, Bull Creek, WA, 6149", "40, Acheron Road, Bull Creek, WA, 6149", "20, Alfred Street, Fremantle, WA, 6160");
	$custpn = array("0491500312", "0865080468", "92797957", "0893937103", "0489005327", "0489877195", "0491500312");
	$custem = array("Buseagnight1977@gustr.com", "Pere1956@jourrapide.com", "Harge1957@gustr.com", "Thattee1967@superrito.com", "Smir1988@einrot.com", "Antle1932@superrito.com", "Youte1948@einrot.com");
	
	for($i = 1; $i < 4; $i++) {
		$cust = 'user' . $i;
		
		$query = "INSERT INTO ASS2_CUST (Username, Password, FirstName, LastName, Address, PhoneNo, Email) VALUES ('$cust', '$cust', '$custfn[$i]', '$custln[$i]', '$custad[$i]', '$custpn[$i]', '$custem[$i]')";
		if(mysql_query($query)) {
			echo "success!<br/>";
		} else {
			echo "failure!<br/>";
		}
	}
	
	for($i = 1; $i < 3; $i++) {
		$staff = 'staff' . $i;
		
		$query = "INSERT INTO ASS2_STAFF (Username, Password) VALUES ('$staff', '$staff')";
		if(mysql_query($query)) {
			echo "success!<br/>";
		} else {
			echo "failure!<br/>";
		}
	}
	
?>