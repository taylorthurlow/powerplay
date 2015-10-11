<?php
	$host_db = '127.0.0.1';
	$name_db = 'powerplay';
	$user_db = 'tsk';
	$pass_db = 'asswipe#####';

	$roomId = $_POST['id'];
	$btnclass = "btn-primary";

	try {
		$connection = new PDO("mysql:host=$host_db; dbname=$name_db", $user_db, $pass_db);
		$sql = "SELECT * FROM `devices` WHERE `location`=$roomId";
		$result = $connection->query($sql);
		foreach($result as $row) {
			if (ord($row['powered']) == 1) {
				$btnclass = 'btn-success';
			} else {
				$btnclass = 'btn-danger';
			}
			echo "<div class='col-md-6 stacked'><div class='well center-block device-well'><div class='row'><div class='col-md-8'><p>";
			echo $row['type'];
			echo "</p></div><div class='col-md-2 device-well-1'>60W</div><div class='col-md-2 device-well-2'><a class='btn ";
			echo $btnclass;
			echo "' onClick='toggleDevice(";
			echo $row['id'];
			echo ")'>ON/OFF</a></div></div></div></div>";
		}
		$connection = null;
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
