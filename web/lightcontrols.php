<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>powerplay - light controls</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/style.css">
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
				<div class="col-md-12 center-block">
					<h2 class="text-center">light controls</h2>
				</div>
			</div>

			<div class="main row">
				<div class="col-md-offset-1 col-md-10" style="margin-bottom: 25px">
					<p>Please select a room. This will list the room's attached devices, and any control options those devices may have.</p>
				</div>

				<div class="room-list">
					<div id="rooms-output" style="height: 100px">

					</div>
				</div>

			</div>

			<div class="footer row">
				<div class="col-md-12 center-block">
					<p class="text-center">powerplay &copy;2015 taylor thurlow, stoyan shukerov, kyle nahas, tim chan - produced at calhacks 2015</p>
				</div>
			</div>

			<button id="test">test</button>

		</div>

		<script type="text/javascript">
			$("#test").click(function() {
				$.ajax({
					url: "api.php",
					async: true,
					dataType: 'text',
					success: function(data) {
						document.write(data);
					}
				});
			});
		</script>

	</body>

</html>
