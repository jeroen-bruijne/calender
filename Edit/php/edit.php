<?php
	include 'DBconnection.php';

	$oldname = $_POST['oname'];
	$newname = $_POST['nname'];
	$newdate = $_POST['ndate'];

	$query = "UPDATE events SET name='$newname', datum='$newdate' WHERE name='$oldname'";

	mysqli_query($link, $query)
	or die('Error querying database failed m8.');

	header("Location: ../../Calendar/index.php");

	mysqli_close($link);
?>