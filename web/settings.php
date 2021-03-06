<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>powerplay - settings</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/style.css">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
	</head>

	<body>

		<div class="content container">

			<?php
			   $path = $_SERVER['DOCUMENT_ROOT'];
			   $path .= "/includes/header.php";
			   include_once($path);
			?>

			<div class="main row">
				<div class="col-md-offset-1 col-md-10" style="margin-bottom: 25px">
					<p class="text-center">Please select the type of ...</p>
				</div>

				<div class="col-md-6 stacked">
					<a href="settingsRoomname.html" class="btn btn-primary center-block">change room names</a>
				</div>
				<div class="col-md-6 stacked">
					<a href="powerusage.html" class="btn btn-primary center-block">set power usage</a>
				</div>
				<div class="col-md-6 stacked">
					<a href="settings.html" class="btn btn-primary center-block">*add here*</a>
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
