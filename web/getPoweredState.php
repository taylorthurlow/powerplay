<?php
	$host_db = '127.0.0.1';
	$name_db = 'powerplay';
	$user_db = 'tsk';
	$pass_db = 'asswipe#####';

	$deviceId = $_POST['id'];

	try {
		$connection = new PDO("mysql:host=$host_db; dbname=$name_db", $user_db, $pass_db);
		$sql = "SELECT * FROM `devices` WHERE `id`=$deviceId";
		$result = $connection->query($sql);
		foreach($result as $row) {
			if(ord($row['powered']) == 1) {
				echo 'true';
			} else {
				echo 'false';
			}
		}
		$connection = null;
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
