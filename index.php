<?php

if (!include("db/db_connect.php");) {
	echo "including db_connect error";
}
if (!include("db/db_interact.php");) {
	echo "including db_interact error";
}

read_variables($db);

?>

<html>
	<head>
		<title>
			Infodesk - Gymhh
		</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<link rel="stylesheet" href="css/main.css">
		<script src="js/main.js"></script>
	</head>
	<body>
		<table style="text-align: center;">
			<tr>
				<td>
				</td>
				<td class="top_cell">
					Funkgeräte
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td class="cell">
					ID
				</td>
				<td class="cell">
					Empfänger
				</td>
				<td class="cell">
					Position
				</td>
			</tr>
			<tr>
				<td class="cell">
					01
				</td>
				<td class="cell">
					<input id="funk_acceptor" class="input" value="<?php read_db($db, "Funkgeraete", "acceptor", "1"); ?>"></input>
				</td>
				<td class="cell">
					<input id="funk_location" class="input" value="<?php read_db($db, "Funkgeraete", "position", "1"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('funk_', '');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					02
				</td>
				<td class="cell">
					<input id="funk_acceptor_2" class="input" value="<?php read_db($db, "Funkgeraete", "acceptor", "2"); ?>"></input>
				</td>
				<td class="cell">
					<input id="funk_location_2" class="input" value="<?php read_db($db, "Funkgeraete", "position", "2"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('funk_', '2');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					03
				</td>
				<td class="cell">
					<input id="funk_acceptor_3" class="input" value="<?php read_db($db, "Funkgeraete", "acceptor", "3"); ?>"></input>
				</td>
				<td class="cell">
					<input id="funk_location_3" class="input" value="<?php read_db($db, "Funkgeraete", "position", "3"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('funk_', '3');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					04
				</td>
				<td class="cell">
					<input id="funk_acceptor_4" class="input" value="<?php read_db($db, "Funkgeraete", "acceptor", "4"); ?>"></input>
				</td>
				<td class="cell">
					<input id="funk_location_4" class="input" value="<?php read_db($db, "Funkgeraete", "position", "4"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('funk_', '4');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					05
				</td>
				<td class="cell">
					<input id="funk_acceptor_5" class="input" value="<?php read_db($db, "Funkgeraete", "acceptor", "5"); ?>"></input>
				</td>
				<td class="cell">
					<input id="funk_location_5" class="input" value="<?php read_db($db, "Funkgeraete", "position", "5"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('funk_', '5');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					06
				</td>
				<td class="cell">
					<input id="funk_acceptor_6" class="input" value="<?php read_db($db, "Funkgeraete", "acceptor", "6"); ?>"></input>
				</td>
				<td class="cell">
					<input id="funk_location_6" class="input" value="<?php read_db($db, "Funkgeraete", "position", "6"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('funk_', '6');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					07
				</td>
				<td class="cell">
					<input id="funk_acceptor_7" class="input" value="<?php read_db($db, "Funkgeraete", "acceptor", "7"); ?>"></input>
				</td>
				<td class="cell">
					<input id="funk_location_7" class="input" value="<?php read_db($db, "Funkgeraete", "position", "7"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('funk_', '7');">
						Save
					</button>
				</td>
			</tr>
		</table>
		<div class="spacer"></div>
		<table style="text-align: center;">
			<tr>
				<td>
				</td>
				<td class="top_cell">
					Schlüssel
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td class="cell">
					ID
				</td>
				<td class="cell">
					Empfänger
				</td>
				<td class="cell">
					Position
				</td>
			</tr>
			<tr>
				<td class="cell">
					01
				</td>
				<td class="cell">
					<input id="physical_key_acceptor_1" class="input" value="<?php read_db($db, "physical_Keys", "acceptor", "1"); ?>"></input>
				</td>
				<td class="cell">
					<input id="physical_key_location_1" class="input" value="<?php read_db($db, "physical_Keys", "location", "1"); ?>"></input>
				</td>
				<td class="cell">
					</td>
				<td class="cell">
					<button class="save_button" onclick="save('physical_key_', '');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					02
				</td>
				<td class="cell">
					<input id="physical_key_acceptor_2" class="input" value="<?php read_db($db, "physical_Keys", "acceptor", "2"); ?>"></input>
				</td>
				<td class="cell">
					<input id="physical_key_location_2" class="input" value="<?php read_db($db, "physical_Keys", "location", "2"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('physical_key_', '2');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					03
				</td>
				<td class="cell">
					<input id="physical_key_acceptor_3" class="input" value="<?php read_db($db, "physical_Keys", "acceptor", "3"); ?>"></input>
				</td>
				<td class="cell">
					<input id="physical_key_location_3" class="input" value="<?php read_db($db, "physical_Keys", "location", "3"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('physical_key_', '3');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					04
				</td>
				<td class="cell">
					<input id="physical_key_acceptor_4" class="input" value="<?php read_db($db, "physical_Keys", "acceptor", "4"); ?>"></input>
				</td>
				<td class="cell">
					<input id="physical_key_location_4" class="input" value="<?php read_db($db, "physical_Keys", "location", "4"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('physical_key_', '4');">
						Save
					</button>
				</td>
			</tr>
		</table>
		<div class="spacer"></div>
		<table style="text-align: center;">
			<tr>
				<td>
				</td>
				<td class="top_cell">
					Stifte
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td class="cell">
					ID
				</td>
				<td class="cell">
					Empfänger
				</td>
				<td class="cell">
					Position
				</td>
			</tr>
			<tr>
				<td class="cell">
					01
				</td>
				<td class="cell">
					<input id="pen_acceptor_1" class="input" value="<?php read_db($db, "Pens", "acceptor", "1"); ?>"></input>
				</td>
				<td class="cell">
					<input id="pen_location_1" class="input" value="<?php read_db($db, "Pens", "location", "1"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('pen_', '');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					02
				</td>
				<td class="cell">
					<input id="pen_acceptor_2" class="input" value="<?php read_db($db, "Pens", "acceptor", "2"); ?>"></input>
				</td>
				<td class="cell">
					<input id="pen_location_2" class="input" value="<?php read_db($db, "Pens", "location", "2"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('pen_', '2');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					03
				</td>
				<td class="cell">
					<input id="pen_acceptor_3" class="input" value="<?php read_db($db, "Pens", "acceptor", "3"); ?>"></input>
				</td>
				<td class="cell">
					<input id="pen_location_3" class="input" value="<?php read_db($db, "Pens", "location", "3"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('pen_', '3');">
						Save
					</button>
				</td>
			</tr>
			<tr>
				<td class="cell">
					04
				</td>
				<td class="cell">
					<input id="pen_acceptor_4" class="input" value="<?php read_db($db, "Pens", "acceptor", "4"); ?>"></input>
				</td>
				<td class="cell">
					<input id="pen_location_4" class="input" value="<?php read_db($db, "Pens", "location", "4"); ?>"></input>
				</td>
				<td class="cell">
				</td>
				<td class="cell">
					<button class="save_button" onclick="save('pen_', '4');">
						Save
					</button>
				</td>
			</tr>
		</table>
		<div class="spacer"></div>
		<button onclick="location.href='warteschleife.php'">
			Warteschleife
		</button>
	</body>
</html>