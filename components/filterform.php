<form id="filterform" onsubmit="post(); return false">
	<table>
		<tr>
			<td>
				<?php
					include ("phpscripts/dbconfig.php");

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
						die('Connection failed: ' . $conn->connect_error);
					} 

					$sql = 'SELECT DISTINCT Type from properties';
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						// output data of each row
						echo '<fieldset><legend>Property type</legend>';
						while($row = $result->fetch_assoc()) {
							echo '<input type="checkbox" name="Type" value="'.$row['Type'].'">'.$row['Type'].'</input><br/>';
						}
						echo '</fieldset>';
					} else {
						echo '0 results';
					}
					$conn->close();
				?>
			</td>
			
			<td>
				<?php
					include ("phpscripts/dbconfig.php");

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
						die('Connection failed: ' . $conn->connect_error);
					} 

					$sql = 'SELECT DISTINCT Suburb from properties';
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						echo '<fieldset><legend>Suburb</legend>';
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<input type="checkbox" name="Suburb" value="'.$row['Suburb'].'">'.$row['Suburb'].'</input><br/>';
						}
						echo '</fieldset>';
					} else {
						echo '0 results';
					}
					$conn->close();
				?>
			</td>
			
			<td>
				<?php
					include ("phpscripts/dbconfig.php");

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
						die('Connection failed: ' . $conn->connect_error);
					} 

					$sql = 'SELECT DISTINCT Furnishings from properties';
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						echo '<fieldset><legend>Furnishings</legend>';
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<input type="checkbox" name="Furnishings" value="'.$row['Furnishings'].'">'.$row['Furnishings'].'</input><br/>';
						}
						echo '</fieldset>';
					} else {
						echo '0 results';
					}
					$conn->close();
				?>
			</td>
			
			<td>
				<fieldset>
					<legend>Weekly Rent</legend>
					<div id="slider"></div>
				</fieldset>
			</td>
			
		</tr>
		
		<tr>
			<td colspan="4" class="centered">
				<input type="submit" value="Submit" class="big-button">
			</td>
		</tr>
	</table>
</form>