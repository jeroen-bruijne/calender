<?php
	include 'DBconnection.php';

	$name = $_POST['name'];

	$query = "DELETE FROM calendar WHERE name = '$name'";

	mysqli_query($link, $query)
	or die('Error querying database failed m8.');

	Echo 'Birthday successfully deleted!';

	mysqli_close($link);
?>