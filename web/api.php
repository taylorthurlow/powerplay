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
		  echo $row['id']. ' - '. $row['nickname']. ' - '. $row['owner']. '<br />';
		}
		// Closing the connection.
		$connection = null;
	}
	// Catching it if something went wrong.
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
