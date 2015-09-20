	<form method="post" action="">
	<?php

		// creates a drop down box which displays all the addresses of the properties currently in the database
					
		include ("../phpscripts/dbconfig.php");

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
					
		// Check connection
		if ($conn->connect_error) {
			die('Connection failed: ' . $conn->connect_error);
		} 

		$sql = "SELECT * FROM properties"; 
		$result = $conn->query($sql);
	
		echo "<select name='formProperty'>";			
		if ($result->num_rows > 0) { 

			// output data of each row
			while($row = $result->fetch_assoc()) {

    				echo "<option value='".$row['ID']."'>". $row['Address'] ." , ". $row['Suburb'] ."</option>";
				
			}
		} else {
			echo '0 results';
		}

		echo "</select>";

		$conn->close();

		?>

	<input type="submit"> <!-- returns the result of the drop down -->
	</form>