var WebSocketServer = require('websocket').server;
var http = require('http');

var server = http.createServer(function(request, response) {
	// process HTTP request. Since we're writing just WebSockets server
	// we don't have to implement anything.
});
server.listen(8080, function() { });

// create the server
wsServer = new WebSocketServer({
	httpServer: server
});

// WebSocket server
wsServer.on('request', function(request) {
	var connection = request.accept(null, request.origin);



	// This is the most important callback for us, we'll handle
	// all messages from users here.
	connection.on('message', function(message) {
		console.log('message receieved');
		if (message.type === 'utf8') {
			console.log('test');
			connection.sendUTF('ping (server -> client)');
			console.log(message);
		}
	});

	connection.on('close', function(connection) {
		// close user connection
	});
});
