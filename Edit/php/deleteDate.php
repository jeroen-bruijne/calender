<?php
	include 'DBconnection.php';

	$name = $_POST['name'];
	$verjaardag = "verjaardag";

	$query = "DELETE FROM events WHERE title = '$verjaardag $name'";

	mysqli_query($link, $query)
	or die('Error querying database failed m8.');

	header("Location: ../../Calendar/index.php");
	mysqli_close($link);
?>