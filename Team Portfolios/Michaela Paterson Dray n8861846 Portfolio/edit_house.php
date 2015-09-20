<html>
   
   <head>
      <title> Edit a Record in MySQL Database</title>
   </head>
   
   <body>
            
	<?php include ("choose_property.php"); ?>
	

	<!-- PAGE DISPLAY THINGS -->

	<br>
	<br>

	<h3> Edit Property <?php echo $_POST["formProperty"]; ?> </h3>

	<form action="" method="post">

		<?php

		include ("../phpscripts/dbconfig.php");

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
					
		// Check connection
		if ($conn->connect_error) {
			die('Connection failed: ' . $conn->connect_error);
		} 

		$_ID = $_POST['formProperty'];

		$sql = "SELECT * FROM properties WHERE ID='$_ID'"; 
		$result = $conn->query($sql);		
		
		if ($result->num_rows > 0) { 

			// output data of each row
			while($row = $result->fetch_assoc()) {

    				// Method 1 // Variables

				$_Address = $row['Address'];
				$_Suburb = $row['Suburb'];
				$_Description = $row['Description'];
				$_Furnishings = $row['Furnishings'];
				$_Rent = $row['Rent'];
				$_Type = $row['Type'];
				$_ID = $row['ID'];

			}
		} else {
			echo '0 results';
		}

		echo "</select>";

		$conn->close();

		?>

		<br> ID: <br>
		<input type="text" name="id" value="<?php echo $_ID; ?>"><br>

		<!-- Change Address -->

		<br> Address: <br>
		<input type="text" name="adress" value="<?php echo $_Address; ?>"><br>
		
		<!-- Change Suburb -->

		<br> Suburb: <br>
		<input type="text" name="suburb" value="<?php echo $_Suburb; ?>"><br>

		<!-- Change Type -->

		<br> Type: <br>
		<input type="text" name="type" value="<?php echo $_Type; ?>"><br>

		<!-- Change Description -->

		<br> Description: <br>
		<input type="text" name="description" value="<?php echo $_Description; ?>"><br>

		<!-- Change Furnishings -->

		<br> Furnishings: <br>
		<input type="text" name="furnishings" value="<?php echo $_Furnishings; ?>"><br>

		<!-- Change Rent -->

		<br> Rent: <br>
		<input type="text" name="rent" value="<?php echo $_Rent; ?>"><br>

		<!-- Change Photo -->

			<!-- need to do this -->
	<br>
	<input type="submit">
	</form>


	<!-- update variables -->

	<?php

	$_Address = $_POST['adress'];
	$_Suburb = $_POST['suburb'];
	$_Description = $_POST['description'];
	$_Furnishings = $_POST['furnishings'];
	$_Rent = $_POST['rent'];
	$_Type = $_POST['type'];
	$_ID = $_POST["id"];


	//update the sql

	include ("../phpscripts/dbconfig.php");

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
					
		// Check connection
		if ($conn->connect_error) {
			die('Connection failed: ' . $conn->connect_error);
		} 

	// address

	$sql = "UPDATE properties SET Address='$_Address' WHERE ID='$_ID'";
		if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
			echo $_ID;
		} else {
    			echo "Error updating record: " . $conn->error;
		}

	//suburb

	$sql = "UPDATE properties SET Suburb='$_Suburb' WHERE ID='$_ID'";
		if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
			echo $_ID;
		} else {
    			echo "Error updating record: " . $conn->error;
		}

 	//description

	$sql = "UPDATE properties SET Description='$_Description' WHERE ID='$_ID'";
		if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
			echo $_ID;
		} else {
    			echo "Error updating record: " . $conn->error;
		}
	

	//furnishings

	$sql = "UPDATE properties SET Furnishings='$_Furnishings' WHERE ID='$_ID'";
		if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
			echo $_ID;
		} else {
    			echo "Error updating record: " . $conn->error;
		}


	// rent

	$sql = "UPDATE properties SET Rent='$_Rent' WHERE ID='$_ID'";
		if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
			echo $_ID;
		} else {
    			echo "Error updating record: " . $conn->error;
		}


	//type

		$sql = "UPDATE properties SET Type='$_Type' WHERE ID='$_ID'";
		if ($conn->query($sql) === TRUE) {
    			echo "Record updated successfully";
			echo $_ID;
		} else {
    			echo "Error updating record: " . $conn->error;
		}

	$conn->close();
	?>


   </body>
</html>