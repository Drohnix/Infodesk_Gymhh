function get_acceptor_value (id) {
	switch (id) {
		case 'funk':
			return funk_acceptor.value;
			break;
		case 'funk_2':
			return funk_acceptor_2.value;
			break;
		case 'funk_3':
			return funk_acceptor_3.value;
			break;
		case 'funk_4':
			return funk_acceptor_4.value;
			break;
		case 'funk_5':
			return funk_acceptor_5.value;
			break;
		case 'funk_6':
			return funk_acceptor_6.value;
			break;
		case 'funk_7':
			return funk_acceptor_7.value;
			break;
		case 'physical_key':
			return physical_key_acceptor.value;
			break;
		case 'physical_key_2':
			return physical_key_acceptor_2.value;
			break;
		case 'physical_key_3':
			return physical_key_acceptor_3.value;
			break;
		case 'physical_key_4':
			return physical_key_acceptor_4.value;
			break;
		case 'pen':
			return pen_acceptor.value;
			break;
		case 'pen_2':
			return pen_acceptor_2.value;
			break;
		case 'pen_3':
			return pen_acceptor_3.value;
			break;
		case 'pen_4':
			return pen_acceptor_4.value;
			break;
		default:
			window.innerHTML = "<p> getting acceptor error </p>";
			break;
	}
}

function get_location_value (id) {
	switch (id) {
		case 'funk':
			return funk_location.value;
			break;
		case 'funk_2':
			return funk_location_2.value;
			break;
		case 'funk_3':
			return funk_location_3.value;
			break;
		case 'funk_4':
			return funk_location_4.value;
			break;
		case 'funk_5':
			return funk_location_5.value;
			break;
		case 'funk_6':
			return funk_location_6.value;
			break;
		case 'funk_7':
			return funk_location_7.value;
			break;
		case 'physical_key':
			return physical_key_location.value;
			break;
		case 'physical_key_2':
			return physical_key_location_2.value;
			break;
		case 'physical_key_3':
			return physical_key_location_3.value;
			break;
		case 'physical_key_4':
			return physical_key_location_4.value;
			break;
		case 'pen':
			return pen_location.value;
			break;
		case 'pen_2':
			return pen_location_2.value;
			break;
		case 'pen_3':
			return pen_location_3.value;
			break;
		case 'pen_4':
			return pen_location_4.value;
			break;
		default:
			window.innerHTML = "<p> getting location error </p>";
			break;
	}
}

function save (id_prefix, id_suffix) {
	if (id_suffix == "") {
		switch (id_prefix) {
			case "funk_":
				id = 'funk';
				break;
			case "physical_key_":
				id = 'physical_key';
				break;
			case "pen_":
				id = 'pen';
				break;
			default:
				window.innerHTML = "<p> unknown id_prefix error </p>";
				break;
		}
		acceptor_id = id_prefix + 'acceptor' + id_suffix;
		location_id = id_prefix + 'location' + id_suffix;
	}
	else {
		id = id_prefix + id_suffix;
		acceptor_id = id_prefix + 'acceptor_' + id_suffix;
		location_id = id_prefix + 'location_' + id_suffix;
	}
	acceptor_value = get_acceptor_value (id);
	location_value = get_location_value (id);
	link = '?id=' + id + '&' + acceptor_id + '=' + acceptor_value + '&' + location_id + '=' + location_value;
	if (!location.href = link;) {
		window.innerHTML = "<p> loading variable link error </p>";
	}
}