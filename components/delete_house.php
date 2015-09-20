<html>
   
   <head>
      <title> Delete a Record in MySQL Database</title>
   </head>
   
   <body>

	<h1> Choose a property to delete </h1>
            
	<?php include ("choose_property.php"); ?>
	

	<!-- PAGE DISPLAY THINGS -->

	<br>
	<br>

	<h3> Delete Property <?php echo $_POST["formProperty"]; ?> </h3>

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
	
		$sql = "DELETE FROM properties WHERE ID='$_ID'";

		if ($conn->query($sql) === TRUE) {
    			echo "Record deleted successfully";
			echo $_ID;
		} else {
    			echo "Error DELETING record: " . $conn->error;
		}

		$conn->close();

		?>
 	</body>
</html>