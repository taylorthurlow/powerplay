/**
 * Handles the submission of the new device form. Adds the given
 * device to the devices table. No input checking or handling for
 * owner name or room name at this time.
 */
$('#newdevicesubmit').click(function() {
	$.ajax({
		url: '/php/newDevice.php',
		type: 'POST',
		data: { type: type,
			   owner: owner,
			   wattage: wattage,
			   location: location },
		success: function(message) {
			$('#newdevicesubmit').html('SUBMITTED!');
			alert(message);
		}
	});
});

/**
 * Returns the full list of room names HTML formatted as needed.
 */
$(document).ready(function() {
	$.ajax({
		url: "/php/getRooms.php",
		async: true,
		dataType: 'text',
		success: function(data) {
			$('#rooms-output').html(data);
		}
	});
});

/**
 * Gets the devices given a certain room ID number, and returns
 * them in properly formatted HTML.
 */
function getDevices(roomId) {
	$.ajax({
		url: "/php/getDevices.php",
		type: 'POST',
		async: true,
		data: {id: roomId},
		dataType: 'text',
		success: function(data) {
			$('#rooms-output').hide();
			$('#add-device').hide();
			$('#devices-output').html(data);
			$('#devices-output').show();
		}
	});
}

/**
 * Eventually will contain the handling for websockets and the necessary
 * code to send the command to the given device, designated by the device
 * ID, to change states.
 */
function toggleDevice(deviceId) {
	var stateMessage = "";

	if (getDeviceState(deviceId) == true) {
		// send DISABLE
		stateMessage = "Disable signal sent for ID#: " + deviceId;
	} else {
		// send ENABLE
		stateMessage = "Enable signal sent for ID#: " + deviceId;
	}

	window.WebSocket = window.WebSocket || window.MozWebSocket;
	var connection = new WebSocket('ws://127.0.0.1:8081');

	// connection is opened and ready to use
	connection.onopen = function () {
		connection.send(stateMessage);
	};

	// an error occurred when sending/receiving data
	connection.onerror = function (error) {	};

	// handle incoming message
	connection.onmessage = function (message) {	};
}

/**
 * Returns whether or not the device, designated by the passed
 * in device ID, is currently "active" or "powered on".
 */
function getDeviceState(deviceId) {
	$.ajax({
		url: "/php/getDeviceState.php",
		type: 'POST',
		async: true,
		data: {id: deviceId},
		dataType: 'text',
		success: function(data) {

		}
	});
	return null;
}
