<?php
	//code for resetting and repopulating table
	
	$host = "localhost";
	$user = "X31566009";
	$password = "secret";
	$dbc=mysql_pconnect($host,$user,$password);
				
	$dbname = "X31566009";
	mysql_select_db($dbname);
	
	//Rearranging table structure
	//-------------------------------
	$query = "DROP TABLE ASS2_WEAPONS"; //completely deletes table
	$result = mysql_query($query);
	
	$query = "CREATE TABLE ASS2_WEAPONS(ItemID int NOT NULL AUTO_INCREMENT, Type varchar(20), Style varchar(30), Material varchar(20), Wrap varchar(20), Colour varchar(20), Build varchar(20), Price decimal(7,2), Stock int(5), Description varchar(1000), PRIMARY KEY (ItemID))"; //recreates table structure
	$result = mysql_query($query);
	//-------------------------------
	
	$query = "DELETE FROM ASS2_WEAPONS"; //clears table of all existing records
	$result = mysql_query($query);
	
	$query = "ALTER TABLE ASS2_WEAPONS AUTO_INCREMENT=1"; //resets auto increment of primary key
	$result = mysql_query($query);
	
	//populated data for sword type, material, colour
	$type = array("Sword", "Shield", "Bow", "Axe", "Knife", "Club", "Spear", "Hammer");
	$material = array("Wood","Bronze", "Steel", "Silver","Obsidian");
	//$colour = array("Black","Red","Blue","Green","Gold","Purple");
	$wrapdata = array("Leather","Cloth");
	$Builddata = array("Genuine","Replica");
	
	//produce indivdual types
	for($t = 0; $t < sizeof($type); $t++) {
		$price = rand(30,90);
		$stock = rand(0,100);
		
		if($type[$t] == "Sword") {
			//roman gladius replica
			$colour = array("Black");
			$description = "This Roman Gladius is idea for cosplay as a Roman gladiator. It has a full length (including the handle) of approximately 80cm and includes an attractive wooden scabbard. The blade material is stainless steel. As this is a replica item it will be shipped blunt and should not be sharpened; it is intended as a prop only.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Roman Gladius', 'Steel', 'Leather', '$colour[$c]', 'Genuine', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//roman gladius reproduction
			$colour = array("Black");
			$description = "This Roman Gladius is ideal for re-enactments and has been forged by one of our local smiths. Including the handle it is approximately 85cm long and includes an attractive wooden scabbard with a leather thong for tying around the waist or to a belt. The blade material is high-carbon steel with a brass handle and pommel; the handle is wrapped with brown leather for grip. This item is shipped in a partially sharpened state to make it easy for you to sharpen it according to your requirements.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Roman Gladius', 'Steel', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//english short sword reproduction
			$colour = array("Black");
			$description = "This English Short Sword is ideal for LARP or re-enactments. It has been forged by one of our local smiths in a 13th century style and comes with a black leather sheath. The blade is approximately 70cm long and is made of high-carbon steel. The handle and pommel is milled steel and has been wrapped with black leather for grip. This item is shipped in a partially sharpened state to make it easy for you to sharpen it according to your requirements.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'English Short Sword', 'Steel', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//english longsword replica
			$colour = array("Black");
			$description = "This English Longsword is great for use as a prop or as a decorative piece. It features a steel blade and includes a plastic “wood look” scabbard with chrome-plated decorative inlay. The sword is approximately 1.2m in total length. Due to the size and material of this blade it is not recommended for sharpening or use as a practical weapon.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'English Longsword', 'Steel', 'Leather', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//japanese katana replica
			$colour = array("Black");
			$description = "This Japanese Katana is great for use as a prop or as a decorative piece. It features a steel blade with a wooden scabbard painted in a low gloss black paint. The handle features imitation shark skin and a traditional style cloth wrap. This weapon is not recommended for practical use and should not be sharpened or exposed to sharp impacts as it may break and cause injury.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Japanese Katana', 'Steel', 'Cloth', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//japanese katana reproduction
			$colour = array("Black");
			$description = "This Katana has been forged by one of our local smiths in the same style as a genuine Japanese blade (note: this sword is NOT sourced from Japan, neither is the smith Japanese; the smith has been trained in the smithing techniques used to produce an accurate blade). Each blade is slightly different but typically feature a blade that is approximately 70cm in length made from folded high-carbon steel. The handle is traditionally wrapped with rayskin and silk. The scabbard is made from wood and has been lacquered in black. This weapon is shipped SHARP and care should be taken when handling this blade.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Katana', 'Steel', 'Rayskin & Silk', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//excalibur
			$stock = 1;
			$price = 0;
			$colour = array("Gold");
			$description = "Behold! The legendary blade Excalibur! Whoso pulleth out this sword of this stone and anvil, is rightwise king (or queen) born. In accordance with legend you cannot simply purchase this weapon; you may however purchase an opportunity to pull the sword from the stone and become the rightful ruler of an empire. Those who are victorious in this regard can look forward to a blade polished so brightly it will blind your enemies, an ornate scabbard that will prevent you from bleeding, and a lovely piece of circular furniture. Note: because of the nature of acquisition, this item cannot be delivered; pickup only.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Excalibur', 'Gold', 'Gold', '$colour[$c]', 'Genuine', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		} else if ($type[$t] == "Shield") {
			
			//kite shield
			$colour = array("Black","Green","Blue");
			$description = "This Kite Shield will keep you safe in style! It features a “lion-punching-another-lion-in-the-face” design on the front so people know you mean business. There are leather straps riveted on the inside for easy holding and it can double as an umbrella in a pinch! This shield is an all-metal design.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Kite Shield', 'Steel', 'Leather', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//round shield
			$colour = array("Black","Blue");
			$description = "This round shield is compact for easy use and transport. It features a hard-wood construction with steel edging and a central steel dome. There are leather straps built-in to the back for easy handling and allows use of both hands when necessary.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Round Shield', 'Steel', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		} else if ($type[$t] == "Bow") {

			//longbow replica
			$colour = array("Black","Brown","Red");
			$description = "This replica Longbow is a genuine bow that can fire arrows (i.e. not a prop). It features a traditional single-piece construction with a hemp string. Special care should be taken with this item as it can be damaged easily. Note: this item is not sold with arrows.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Longbow', 'Wood', 'Leather', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//crossbow replica
			$colour = array("Black","Brown","Red");
			$description = "This replica crossbow is a genuine bow that can fire arrows (i.e. not a prop). It features a traditional wood construction and uses a removable pull lever style cocking device. Note: this item is not shipped with crossbow bolts.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Crossbow', 'Wood', 'Leather', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		} else if ($type[$t] == "Axe") {
			
			//single-edge battle axe cloth
			$colour = array("Black","Green","Red");
			$description = "This is a single-edge combat battleaxe. It comes with a 1m long wooden handle with a cloth wrap in one of three colours: black, green or red. As this is a replica item it will be shipped blunt.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Single-Edge Battle Axe', 'Steel', 'Cloth', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//single-edge battle axe leather
			$colour = array("Black","Brown");
			$description = "This is a single-edge combat battleaxe. It comes with a 1m long wooden handle with a leather wrap in one of two colours: black or brown. As this is a replica item it will be shipped blunt.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Single-Edge Battle Axe', 'Steel', 'Leather', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//single-edge throwing axe cloth
			$colour = array("Black","Red","Blue","Green");
			$description = "This is a single-edge throwing axe. It comes with a short handle with a cloth wrap in one of four colours: black, red, blue or green. As this is a replica item it will be shipped blunt.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Single-Edge Throwing Axe', 'Steel', 'Cloth', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//single-edge throwing axe leather
			$colour = array("Black","Brown");
			$description = "This is a single-edge throwing axe. It comes with a short handle with a leather wrap in one of two colours: black or brown. As this is a replica item it will be shipped blunt.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Single-Edge Throwing Axe', 'Steel', 'Leather', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//double-edge battleaxe axe leather
			$colour = array("Black");
			$description = "This is a double-edged battleaxe forged by a local smith. The standard model features an “oversize” axe head (for maximum intimidation!) and a 1.2m long oak handle. Two sections of the handle are wrapped with black leather to improve grip (and make it look awesome!). This item is shipped in a partially sharpened state to make it easy for you to sharpen it according to your requirements. Customised orders can be placed through our contact email.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Double-Edge Battleaxe', 'Steel', 'Leather', '$colour[$c]', 'Genuine', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		} else if ($type[$t] == "Knife") {
			
			//scottish dirk
			$colour = array("Black","Brown");
			$description = "This Scottish Dirk has been forged by one of our local smiths. It features a hilt of carved ebony wood with silver features. The scabbard is also constructed of ebony wood and silver. The single-edge blade is made from steel and is approximately 30cm long.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Scottish Dirk', 'Silver', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//kunai
			$colour = array("Black","Red");
			$description = "These Kunai are idea for learning knife throwing or as a prop for cosplay. Just like genuine Kunai these blades are made of iron and feature a simple cloth wrap in black or red for additional grip on the handle. They include a simple leather holster for storage and transport.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Kunai (Set of 3)', 'Iron', 'Cloth', '$colour[$c]', 'Replica', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//utility knife
			$colour = array("Black","Brown");
			$description = "This is a simple peasant’s utility knife forged by one of our local smiths. It features a simple wooden handle and a single-edge steel blade. Includes a leather sheath with a belt loop.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Utility Knife', 'Steel', 'Cloth', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		} else if ($type[$t] == "Club") {
			
			//studded wooden club
			$colour = array("Black","Brown");
			$description = "This heavy wooden club features hand-made iron banding and rivets from one of our local smiths. It has a simple leather wrap around the handle for grip and a leather strap for fastening around the wrist or swinging. This club is approximately 60cm long.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Studded Wooden Club', 'Wood', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//studded wooden club
			$colour = array("Black","Brown");
			$description = "Get yourself a genuine “Caveman Club”! We have searched high and low for the finest logs to produce these clubs. Because of how they are made there will be variations in the size, shape and style of this weapon. If you have more specific requirements please contact via email before placing your order.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Caveman Club', 'Wood', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//a stick
			$stock = 20;
			$price = 499.99;
			$colour = array("Brown");
			$description = "A common stick. Much like the kind you can find practically anywhere. Use it wisely.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'A Stick', 'Wood', 'None', '$colour[$c]', 'Genuine', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		} else if ($type[$t] == "Spear") {
			
			//pike
			$colour = array("Black","Brown");
			$description = "This Pike features a head that has been forged by one of our local smiths. The head is made from steel and the handle is made of Ash wood. The total length of this item is 5m. Because of its length this item cannot be shipped and is available for local pickup only.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Pike', 'Steel', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//javelin
			$colour = array("Black","Brown");
			$description = "This Javelin features a head that has been forged by one of our local smiths. The head is made from steel and the handle is made of spruce. The total length of this item is 2m.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Javelin', 'Steel', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//Halberd
			$colour = array("Black","Brown");
			$description = "This Halberd features a head forged by one of our local smiths. The head is made from steel and the handle is made from Ash wood. Our Halberd is 1.6m long from tip to base. It features a round face axe on one side and a spiked hook on the other.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Halberd', 'Steel', 'Leather', '$colour[$c]', 'Reproduction', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		} else if ($type[$t] == "Hammer") {
			
			//double-sided blunt warhammer leather
			$colour = array("Black");
			$description = "This is a double-sided warhammer forged by a local smith. The standard model features two blunt striking surfaces; one with a large face and one with a small face. The handle is 1m long and forged into the head. The handle is half wrapped with brown leather with the hammer itself being primarily black. Customised orders for this product can be placed through our contact email.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Double-sided Blunt Warhammer', 'Steel', 'Leather', '$colour[$c]', 'Genuine', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			//double-sided spiked warhammer leather
			$colour = array("Black");
			$description = "This is a double-sided warhammer forged by a local smith. The standard model features one blunt striking surface and one spike (the spiked side is great as a can opener!). The handle is 1m long and forged into the head. The handle is half wrapped in black leather with the hammer itself being primarily steel coloured. Customised orders for this product can be placed through our contact email.";
			for($c = 0; $c < sizeof($colour); $c++) {
				$query = "INSERT INTO ASS2_WEAPONS (Type, Style, Material, Wrap, Colour, Build, Price, Stock, Description) VALUES ('$type[$t]', 'Double-sided Spiked Warhammer', 'Steel', 'Leather', '$colour[$c]', 'Genuine', $price, $stock, '$description')";
				if(mysql_query($query)) {
					echo "success!<br/>";
				} else {
					echo "failure!<br/>";
				}
			}
			
		}
		
	}
	echo "success!";
?>