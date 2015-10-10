<?php
	$con = mysqli_connect("127.0.0.1", "tsk", "asswipe#####", "powerplay");
	if(mysqli_connect_errno($con)) {
		error.log("Failed to connect to MySQL database. Please contact a network admin. " . mysqli_connect_error());
	}
	session_start();

	$result = mysqli_query($con, "SELECT COUNT(*) FROM `rooms`");
	$data = mysqli_fetch_array($result);
	$numRows = $data[0];

	for ($i = 0; $i <= $numRows; $i++) {
		$query = "SELECT * FROM `rooms` WHERE `id` = $i";
		$result = mysqli_query($con, $query);
		$data = mysqli_fetch_array($result);
		$printNickname = $data['nick'];
		$_POST['nick'] = $printNickname;
		echo $_POST['nick'];
	}

	mysqli_close($con);
?>
