function testMessage(mainMessage) {
	var client = "ws://192.168.1.223";
	var output;
	var websocket;

	function connect() {
		websocket = new WebSocket(client);
		alert('sending');
		websocket.send("FUCK THIS SHIT");
		alert('sent');
		websocket.onopen = function(evt) { onOpen(evt) };
		websocket.onclose = function(evt) { onClose(evt) };
		websocket.onmessage = function(evt) { onMessage(evt) };
		websocket.onerror = function(evt) { onError(evt) };
	}

	function init() {
		output = document.getElementById("output");
		connect();
	}

	function onOpen(evt) {
		alert('onOpen');
		writeToScreen("CONNECTED");
		doSend(mainMessage);
	}

	function onClose(evt) {
		writeToScreen("DISCONNECTED");
	}

	function onMessage(evt) {
		alert('test');
		alert(evt.data);
		websocket.close();
	}

	function onError(evt) {
		alert(evt.data);
	}

	function doSend(message) {
		alert('doSend');
		writeToScreen("SENT: " + message);
		websocket.send(message);
	}

	function writeToScreen(message) {
		var pre = document.createElement("p");
		pre.style.wordWrap = "break-word";
		pre.innerHTML = message;
		output.appendChild(pre);
	}

	init();
}
