<?php

		include 'DBconnection.php';

		$sql = "SELECT * FROM calendar";
					
							
		// voer de query uit
		$result = $link->query($sql);	
		
		// als er iets fout ging met de query, dan heeft $result de waarde false. Geef dan een foutmelding weer.
		if( $result == false ){
			die('There was an error running the query [' . $link->error . ']');
		}
		// start een tabel met dikgedrukte kop
		echo '<table>'; 
?>

<colgroup>
	<col style="width: 20%">
	<col style="width: 20%">
</colgroup> 

<?php
		echo '<tr>

				<th>Naam</th>
				<th>Verjaardag</th>
			</tr>';

		// print de rijen
		while($row = $result->fetch_assoc()){
			
			echo '<tr>';

			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['datum'] . '</td>';
			echo '<td>' ;
			echo '</td>';
			echo '</tr>';	
		}		
		
		// sluit de tabel
		echo '</table>';
		
?>

<colgroup>
	<col style="width: 5%">
	<col style="width: 20%">
	<col style="width: 20%">
</colgroup> 

</div>

<table>

</table>

</body>

</html>