<?php

$dbc = mysqli_connect('localhost', 'root', '', 'calendar')
or die('Error connecting to MySQL server.');

$query="SELECT * FROM calendar";
$result=mysql_query($query);

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("name %s  datum %s", $row[0], $row[1]);  
}

mysql_free_result($result);
?>

?>