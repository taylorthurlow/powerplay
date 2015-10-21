var WebSocketServer = require('websocket').server;
var http = require('http');

var server = http.createServer(function(request, response) {
	// process HTTP request. Since we're writing just WebSockets server
	// we don't have to implement anything.
});
server.listen(8081, function() { });

// create the server
wsServer = new WebSocketServer({
	httpServer: server
});

// WebSocket server
wsServer.on('request', function(request) {
	var con = request.accept(null, request.origin);
	console.log((new Date()) + " - Connection accepted.");

	// Messages received from webpage
	con.on('message', function(message) {
		console.log('Message received.');
		if (message.type === 'utf8') {
			console.log(message);
		}
	});

	con.on('close', function(connection) {
		// close user connection
	});
});
