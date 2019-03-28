<?php
	$host = "localhost";
	$user = "X31566009";
	$password = "secret";
	$dbc=mysql_pconnect($host,$user,$password);

	$dbname = "X31566009";
	mysql_select_db($dbname);
	$ItemID = $_POST['itemid'];
	$query = "SELECT * FROM ASS2_WEAPONS WHERE ItemID = '$ItemID'";
	$result = mysql_query($query);

	if(!(mysql_num_rows($result) == 0)) { //if item still exists

		while($row=mysql_fetch_array($result)) {
			$type = $row['Type'];
			$material = $row['Material'];
			$colour = $row['Colour'];
		}

		if($material == 'Wood') {
			$materialcol = 'BurlyWood';
		} else if($material == 'Bronze') {
			$materialcol = 'DarkGoldenRod';
		} else if($material == 'Steel') {
			$materialcol = 'SteelBlue';
		} else if($material == 'Silver') {
			$materialcol = 'Silver';
		} else if($material == 'Obsidian') {
			$materialcol = 'Black';
		} else if($material == 'Gold') {
			$materialcol = 'Gold';
		} else {
			$materialcol = 'Black';
		}

		echo "\n";
		echo "<pre>";

		if($type == 'Sword') {

			echo"  <span style=color:$materialcol;>      /&#92;  \n";
			echo"       // &#92; \n";
			echo"       || |  \n";
			echo"       || |  \n";
			echo"       || |  \n";
			echo"       || |  \n";
			echo"       || |  \n";
			echo"       || |  \n";
			echo"    </span><span style=color:$colour;>__</span><span style=color:$materialcol;> || |</span><span style=color:$colour;> __  \n";
			echo"   /___</span><span style=color:$materialcol;>||</span><span style=color:$colour;>_</span><span style=color:$materialcol;>|</span><span style=color:$colour;>___\  \n";
			echo"        ww  \n";
			echo"        MM  \n";
			echo"       _MM_  \n";
			echo"      (&<>&)  \n";
			echo"       ~~~~  </span>\n";

		} else if($type == 'Shield') {

			echo"  \n";
			echo"  \n";
			echo"  \n";
			echo" <span style=color:$materialcol;>  |`-._/\_.-`|\n";
			echo"   |    </span><span style=color:$colour;>||</span><span style=color:$materialcol;>    |\n";
			echo"   |</span><span style=color:$colour;>___o()o___</span><span style=color:$materialcol;>|\n";
			echo"   |</span><span style=color:$colour;>__((<>))__</span><span style=color:$materialcol;>|\n";
			echo"   \   </span><span style=color:$colour;>o\/o   </span><span style=color:$materialcol;>/\n";
			echo"    \   </span><span style=color:$colour;>||   </span><span style=color:$materialcol;>/\n";
			echo"     \  </span><span style=color:$colour;>||  </span><span style=color:$materialcol;>/\n";
			echo"      '.</span><span style=color:$colour;>||</span><span style=color:$materialcol;>.'\n";
			echo"        ``  </span>\n";
			echo"   \n";
			echo"   \n";
			echo"   \n";

		} else if($type == 'Bow') {

			echo"  \n";
			echo"  \n";
			echo"       <span style=color:$colour;>/</span><span style=color:$materialcol;>`.  \n";
			echo"      </span><span style=color:$colour;>/   </span><span style=color:$materialcol;>:.  \n";
			echo"     </span><span style=color:$colour;>/     </span><span style=color:$materialcol;>&#92;&#92;  \n";
			echo"    </span><span style=color:$colour;>/       </span><span style=color:$materialcol;>::  \n";
			echo"   </span><span style=color:$colour;>/        </span><span style=color:$materialcol;>||  \n";
			echo"  </span><span style=color:$colour;>|:)>>>----</span><span style=color:$materialcol;>'B)</span><span style=color:$colour;>>  \n";
			echo"   </span><span style=color:$colour;>\        </span><span style=color:$materialcol;>||  \n";
			echo"    </span><span style=color:$colour;>\       </span><span style=color:$materialcol;>;;  \n";
			echo"     </span><span style=color:$colour;>\     </span><span style=color:$materialcol;>//  \n";
			echo"      </span><span style=color:$colour;>\   </span><span style=color:$materialcol;>;'  \n";
			echo"       </span><span style=color:$colour;>\</span><span style=color:$materialcol;>,'  </span>\n";
			echo"  \n";
			echo"  \n";

		} else if($type == 'Axe') {

			echo "   <span style=color:$materialcol;>,:\      /:.  \n";
			echo "  //  \_()_/  &#92;&#92; \n";
			echo " ||   |    |   ||  \n";
			echo " ||   |    |   ||  \n";
			echo " ||   |____|   ||  \n";
			echo "  &#92;&#92;  / || &#92;  //  \n";
			echo "   `:/  ||  &#92;;'  \n";
			echo "        ||  \n";
			echo "        ||  \n";
			echo "        </span><span style=color:$colour;>XX  \n";
			echo "        XX  \n";
			echo "        XX  \n";
			echo "        XX  \n";
			echo "        OO  \n";
			echo "        `'  </span>\n";

		} else if($type == 'Flail') {

			echo "  \n";
			echo "  \n";
			echo "  \n";
			echo "  \n";
			echo "   <span style=color:$materialcol;>.d888b.  \n";
			echo "   8888888  \n";
			echo "   8888888>  \n";
			echo "   `Y888P'`-=_  \n";
			echo "              I  \n";
			echo "     </span><span style=color:$colour;>____     </span><span style=color:$materialcol;>I  \n";
			echo "    </span><span style=color:$colour;>|____|</span><span style=color:$materialcol;>>-='  </span>\n";
			echo "  \n";
			echo "  \n";
			echo "  \n";
			echo "  \n";

		} else if($type == 'Club') {

			echo "  \n";
			echo "     <span style=color:$materialcol;>.d8888b.  \n";
			echo "    .88888888.  \n";
			echo "    8888888888  \n";
			echo "    8888888888  \n";
			echo "    8888888888  \n";
			echo "    8888888888  \n";
			echo "    '88888888'  \n";
			echo "     `Y8888P'  \n";
			echo "       </span><span style=color:$colour;>'WW'  \n";
			echo "        MM  \n";
			echo "       .MM.</span>  \n";
			echo "       <span style=color:$materialcol;>8888  \n";
			echo "        ''  </span>\n";
			echo "  \n";

		} else if($type == 'Spear') {

			echo "         <span style=color:$materialcol;>.  \n";
			echo "        /^&#92;  \n";
			echo "       // &#92;&#92;  \n";
			echo "       &#92;&#92; //  \n";
			echo "        </span><span style=color:$colour;>|=|</span><span style=color:$materialcol;>  \n";
			echo "        | |  \n";
			echo "        | |  \n";
			echo "        | |  \n";
			echo "        | |  \n";
			echo "        | |  \n";
			echo "        | |  \n";
			echo "        </span><span style=color:$colour;>|=|  \n";
			echo "        |8|  \n";
			echo "        |8|  \n";
			echo "        '='  </span>\n";

		} else if($type == 'Knife') {

			echo "      <span style=color:$colour;>.---. \n";
			echo "      |---| \n";
			echo "      |---| \n";
			echo "      |---| \n";
			echo "  .---^ - ^---. \n";
			echo "  :___________:</span><span style=color:$materialcol;> \n";
			echo "     |  |//| \n";
			echo "     |  |//| \n";
			echo "     |  |//| \n";
			echo "     |  |//| \n";
			echo "     |  |.-| \n";
			echo "     |.-'**| \n";
			echo "      &#92;***/ \n";
			echo "       &#92;*/ \n";
			echo "        V</span> \n";

		} else if($type == 'Hammer') {

		echo "\n";
		echo "     <span style=color:$materialcol;>.------.\n";
		echo "     |//////|\n";
		echo "     `------'\n";
		echo "        ||\n";
		echo "        ||\n";
		echo "        ||\n";
		echo "        ||\n";
		echo "        ||</span><span style=color:$colour;>\n";
		echo "        XX\n";
		echo "        XX\n";
		echo "        XX\n";
		echo "        OO\n";
		echo "        `'</span>\n";
		echo "\n";

		} else {
			echo "\n";
			echo "  No          \n";
			echo "  Image       \n";
			echo "  Available   \n";
			echo "\n";
		}
		echo "</pre>";
	} else {
		echo "<pre>";
		echo "\n";
		echo "  No          \n";
		echo "  Image       \n";
		echo "  Available   \n";
		echo "\n";
		echo "</pre>";
	}
?>
