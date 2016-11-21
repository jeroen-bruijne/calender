<?php
	include 'DBconnection.php';

	$name = $_POST['name'];
	$date = $_POST['date'];

	$query = "INSERT INTO calendar (name, datum)" .
	"VALUES ('$name', '$date')";

	mysqli_query($link, $query)
	or die('Error querying database failed m8.');

	Echo 'Birthday successfully added!';

	mysqli_close($link);
?>