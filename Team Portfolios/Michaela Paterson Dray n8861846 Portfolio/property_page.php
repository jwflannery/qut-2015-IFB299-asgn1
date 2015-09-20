<html>
	<head>
		<title>David's Property Management Site</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		
	</head>
	
	<body>
		<div id="container">
			
			<?php include ("components/header.php"); ?>


			<!-- SQL SCRIPT -->

			<?php


			include ("phpscripts/dbconfig.php");

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die('Connection failed: ' . $conn->connect_error);
			}


			$id = $_GET['id'];
			$sql = "SELECT * FROM properties WHERE ID='$id'"; ///THIS IS A THING TO FIGURE OUT///
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
    				// output data of each row
    				while($row = $result->fetch_assoc()) {
        				echo '

						<div class="terribletableformat">

						<table style="width:100%">
  							<tr align="center">

    								<td>


						<div class="propertyimages">
	
						<p> here are the property images!!! </p>	
						
						<img src="'.$row['Photo'].'" width="600"> <br>
						<img src="'.$row['Image_1'].'"  width="197">
						<img src="'.$row['Image_2'].'" width="197" >
						<img src="'.$row['Image_3'].'" width="197">
			
						</div>	


								</td> 

    								<td>

						<div class="propertyinformationbox">

						<p> all the information for the property!!! </p> <br>

						ADDRESS: '.$row['Address'].' <br>
						SUBURB: '.$row['Suburb'].' <br>
						TYPE: '.$row['Type'].' <br>
						FURNISHINGS: '.$row['Furnishings'].' <br>


						</div>	

								</td>
 							</tr>
							</table>

			
						

						</div>


					';

    				}
			} else {
    				echo "0 results";
			}
			$conn->close();

			?>

			<!-- SQL SCRIPT -->


	        	<?php include ("components/footer.php"); ?>
		
		</div>

		

			
		
	</body>
</html>