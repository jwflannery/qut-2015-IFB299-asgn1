<?php
	include ("dbconfig.php");

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die('Connection failed: ' . $conn->connect_error);
	}

	$sql = $_POST['variable'];
	if ($sql == "") {
		$sql = 'SELECT * from properties';
	}
	
	$result = $conn->query($sql);
	

	if ($result->num_rows > 0) {
		// output data of each row
		echo '<div id="results">';
		while($row = $result->fetch_assoc()) {
			echo '
			<div class="result">
				<div class="imagebox">

					<!-- the image for each property is a link to the specific peroperty information page -->

					<a href="property_page.php?id='.$row['ID'].'"> <img src="'.$row['Photo'].'"> </a> 

					<!-- The ID is important for the sql query --> 

				</div>
				
				<div class="infobox">
					<div class="address">'.$row['Address'].', '.$row['Suburb'].'</div>
					<div class="type">'.$row['Type'].'</div>
					<div class="furnishings">'.$row['Furnishings'].'</div>
					<div class="description">'.$row['Description'].'</div>
				</div>
			</div>
			';
		}
		echo '</div>';
	} else {
		echo '0 results';
	}
	$conn->close();
?>