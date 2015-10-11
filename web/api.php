<?php

	// Initializing connection data.
	$host_db = '127.0.0.1';
	$name_db = 'powerplay';
	$user_db = 'tsk';
	$pass_db = 'asswipe#####';

	try {
		// Connecting using the PDO object.
		$connection = new PDO("mysql:host=$host_db; dbname=$name_db", $user_db, $pass_db);

		// Setting the query and runnin it...
		$sql = "SELECT * FROM `rooms`";
		$result = $connection->query($sql);

		// Iterating over the data and printing it.
		foreach($result as $row) {
			echo "<div class='col-md-6 stacked'>";
			echo "<a href='#' onClick='displayDevices(";
			echo $row['id'];
			echo ")' class='btn btn-primary center-block'>";
			echo $row['nickname'];
			echo "</a>";
			echo "</div>";
		}
		// Closing the connection.
		$connection = null;
	}
	// Catching it if something went wrong.
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
