<?php

function read_db ($db, $table, $column, $id) {
	$command = "SELECT " . $column . " FROM " . $table . " WHERE id=" . $id . ";";
	$query = mysqli_query($db, $command);
	$fetch = mysqli_fetch_assoc($query);
	if (!echo $fetch[$column];) {
		echo "db reading error";
	}
}

function write_db ($db, $table, $column, $id, $value) {
	$command = "UPDATE " . $table . " SET " . $column . "= '" . $value . "' WHERE id=" . $id . ";";
	if(mysqli_query($db, $command)) {
		echo "Sucess";
	}
	else {
		echo "db writing error";
	}
}

function read_variables ($db) {
	switch ($_GET["id"]) {
		case "funk":
			write_db ($db, "Funkgeraete", "acceptor", 1, $_GET["funk_acceptor"]);
			write_db ($db, "Funkgeraete", "position", 1, $_GET["funk_location"]);
			break;
		case "funk_2":
			write_db ($db, "Funkgeraete", "acceptor", 2, $_GET["funk_acceptor_2"]);
			write_db ($db, "Funkgeraete", "position", 2, $_GET["funk_location_2"]);
			break;
		case "funk_3":
			write_db ($db, "Funkgeraete", "acceptor", 3, $_GET["funk_acceptor_3"]);
			write_db ($db, "Funkgeraete", "position", 3, $_GET["funk_location_3"]);
			break;
		case "funk_4":
			write_db ($db, "Funkgeraete", "acceptor", 4, $_GET["funk_acceptor_4"]);
			write_db ($db, "Funkgeraete", "position", 4, $_GET["funk_location_4"]);
			break;
		case "funk_5":
			write_db ($db, "Funkgeraete", "acceptor", 5, $_GET["funk_acceptor_5"]);
			write_db ($db, "Funkgeraete", "position", 5, $_GET["funk_location_5"]);
			break;
		case "funk_6":
			write_db ($db, "Funkgeraete", "acceptor", 6, $_GET["funk_acceptor_6"]);
			write_db ($db, "Funkgeraete", "position", 6, $_GET["funk_location_6"]);
			break;
		case "funk_7":
			write_db ($db, "Funkgeraete", "acceptor", 7, $_GET["funk_acceptor_7"]);
			write_db ($db, "Funkgeraete", "position", 7, $_GET["funk_location_7"]);
			break;
		case "physical_key":
			write_db ($db, "physical_Keys", "acceptor", 1, $_GET["physical_key_acceptor"]);
			write_db ($db, "physical_Keys", "position", 1, $_GET["physical_key_location"]);
			break;
		case "physical_key_2":
			write_db ($db, "physical_Keys", "acceptor", 2, $_GET["physical_key_acceptor_2"]);
			write_db ($db, "physical_Keys", "position", 2, $_GET["physical_key_location_2"]);
			break;
		case "physical_key_3":
			write_db ($db, "physical_Keys", "acceptor", 3, $_GET["physical_key_acceptor_3"]);
			write_db ($db, "physical_Keys", "position", 3, $_GET["physical_key_location_3"]);
			break;
		case "physical_key_4":
			write_db ($db, "physical_Keys", "acceptor", 4, $_GET["physical_key_acceptor_4"]);
			write_db ($db, "physical_Keys", "position", 4, $_GET["physical_key_location_4"]);
			break;
		case "pen":
			write_db ($db, "Pens", "acceptor", 1, $_GET["pen_acceptor"]);
			write_db ($db, "Pens", "position", 1, $_GET["pen_location"]);
			break;
		case "pen_2":
			write_db ($db, "Pens", "acceptor", 2, $_GET["pen_acceptor_2"]);
			write_db ($db, "Pens", "position", 2, $_GET["pen_location_2"]);
			break;
		case "pen_3":
			write_db ($db, "Pens", "acceptor", 3, $_GET["pen_acceptor_3"]);
			write_db ($db, "Pens", "position", 3, $_GET["pen_location_3"]);
			break;
		case "pen_4":
			write_db ($db, "Pens", "acceptor", 4, $_GET["pen_acceptor_4"]);
			write_db ($db, "Pens", "position", 4, $_GET["pen_location_4"]);
			break;
		default:
			echo "link reading error";
			break;
	}
}

?>