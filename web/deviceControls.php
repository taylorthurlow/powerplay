<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>powerplay - device controls</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script type="text/javascript" src="/js/deviceControls.js"></script>
	</head>

	<body>

		<div class="content container">

			<?php
			   $path = $_SERVER['DOCUMENT_ROOT'];
			   $path .= "/includes/header.php";
			   include_once($path);
			?>

			<div class="main row">
				<div class="col-md-12 center-block" style="margin-bottom: 25px">
					<p class="text-center">Please select a room. This will list the room's attached devices, and any control options those devices may have.</p>
				</div>
			</div>

			<div class="row">
				<div id="rooms-output" class="col-md-12 center-block"></div>
				<div id="devices-output" class="col-md-12 center-block"></div>
			</div>

			<br /> <br />
			<div id="add-device" class="row">
				<div class="col-md-offset-3 col-md-6 well">
					<p>Add new device:</p>

					<form>
						<div class="form-group">
							<label for="type">type</label>
							<input type="text" class="form-control" id="type" placeholder="type of device">
						</div>
						<div class="form-group">
							<label for="owner">owner</label>
							<input type="text" class="form-control" id="owner" placeholder="name of owner">
						</div>
						<div class="form-group">
							<label for="wattage">wattage</label>
							<input type="text" class="form-control" id="wattage" placeholder="power draw in watts">
						</div>
						<div class="form-group">
							<label for="location">location</label>
							<input type="text" class="form-control" id="location" placeholder="location as an integer">
						</div>
						<button id="newdevicesubmit" type="submit" class="btn btn-primary center-block">add device</button>
					</form>
				</div>
			</div>

			<?php
			   $path = $_SERVER['DOCUMENT_ROOT'];
			   $path .= "/includes/footer.php";
			   include_once($path);
			?>

		</div>

	</body>

</html>
