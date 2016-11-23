<html>

  <link rel="stylesheet" type="text/css" href="../style.css" />

<?php
	include 'DBconnection.php';



	$name = $_POST['name'];
	$date = $_POST['date'];

	$verjaardag = 'verjaardag';

	$query = "INSERT INTO events (title, date, status)" .
	"VALUES ('$verjaardag $name', '$date', ('1'))";

	mysqli_query($link, $query)
	or die('Error querying database failed m8.');
	
	header("Location: ../../Calendar/index.php");

	mysqli_close($link);
?>

</html>