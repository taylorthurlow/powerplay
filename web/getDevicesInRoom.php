<?php
	$host_db = '127.0.0.1';
	$name_db = 'powerplay';
	$user_db = 'tsk';
	$pass_db = 'asswipe#####';

	$roomId = $_POST['id'];

	try {
		$connection = new PDO("mysql:host=$host_db; dbname=$name_db", $user_db, $pass_db);
		$sql = "SELECT * FROM `devices` WHERE `location`=$roomId";
		$result = $connection->query($sql);
		foreach($result as $row) {
			echo "<div class='col-md-6 stacked'><div class='well center-block device-well'><p>";
			echo $row['type'];
			echo "</p></div></div>";
		}
		$connection = null;
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
