<?php

	$mysql_host = 'localhost';
    $mysql_db = 'test';
    $mysql_user = 'root';
    $mysql_pass = '';

    // create a connection to the database
    $link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

    // if something went wrong, display error information
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
	
?>