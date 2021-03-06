<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PowerPlay- Room Names</title>
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
                <div class="col-md-2 logo"></div>
				<div class="col-md-10 center-block">
					<h2 class="text-center">room names</h2>
				</div>
			</div>

			<div class="main row">
				<div class="col-md-offset-1 col-md-10" style="margin-bottom: 25px">
					<p class="text-center">Click on a room to change its name.</p>
                    <div class="room-list row">
				<div id="rooms-output" class="col-md-12 center-                     block">
                </div>
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
		</script>

	</body>

</html>
