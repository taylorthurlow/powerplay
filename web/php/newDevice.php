<?php
	$host_db = '127.0.0.1';
	$name_db = 'powerplay';
	$user_db = 'tsk';
	$pass_db = 'asswipe#####';

	$type = $_POST['type'];
	$owner = $_POST['owner'];
	$wattage = $_POST['wattage'];
	$location = $_POST['location'];

	$con = mysqli_connect($host_db, $user_db, $pass_db, $name_db);
	if ($con -> connect_error) die("Conncetion failed: " . $con -> connect_error);
	$sql = "INSERT INTO `devices` (type, owner, wattage, powered, location) VALUES ('$type', '$owner', '$wattage', 0, $location)";

	if ($con -> query($sql) === true) {
		echo "New entry inserted successfully.";
	} else {
		echo "Error inserting entry.";
		echo "Error: " . $sql . "<br>" . $con -> error;
	}

	$con -> close();
?>
