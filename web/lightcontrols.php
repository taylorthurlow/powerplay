<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>powerplay - light controls</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link href="/css/style.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="/jquery.js"></script>

	</head>

	<body>

		<div class="content container">

			<div class="header row">
                <div class="col-md-2 logo"></div>
				<div class="col-md-10 center-block">
					<h2 class="text-center">light controls</h2>
				</div>
			</div>

			<div class="main row">
				<div class="col-md-12 center-block" style="margin-bottom: 25px">
					<p class="text-center">Please select a room. This will list the room's attached devices, and any control options those devices may have.</p>
				</div>
			</div>

			<div class="room-list row">
				<div id="rooms-output" class="col-md-12 center-block"></div>
				<div id="devices-output" class="col-md-12 center-block"></div>
			</div>

			<div class="footer row">
				<div class="col-md-12 center-block">
					<p class="text-center">powerplay &copy;2015 taylor thurlow, stoyan shukerov, kyle nahas, tim chan - produced at calhacks 2015</p>
				</div>
			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function() {
				$.ajax({
					url: "api.php",
					async: true,
					dataType: 'text',
					success: function(data) {
						$('#rooms-output').html(data);
					}
				});
			});

			function displayDevices(roomId) {
				$.ajax({
					url: "getDevicesInRoom.php",
					type: 'POST',
					async: true,
					data: {id: roomId},
					dataType: 'text',
					success: function(data) {
						$('#rooms-output').hide();
						$('#devices-output').html(data);
						$('#devices-output').show();
					}
				});
			}

			function getPoweredState(deviceId) {
				$.ajax({
					url: "getPoweredState.php",
					type: 'POST',
					async: true,
					data: {id: deviceId},
					dataType: 'text',
					success: function(data) {
						if(data == "true") {
							return true;
						} else if (data == "false") {
							return false;
						}
					}
				});
				return null;
			}

			function toggleDevice(deviceId) {
				if (getPoweredState(deviceId) == true) {
					//send disable to device
				} else {
					//send enable to device
				}
			}
		</script>

	</body>

</html>
