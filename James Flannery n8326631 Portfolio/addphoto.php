<?php
         if(isset($_POST['update']))
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
			$dbname = 'property_management'; 
			
			$target = "../images/";
			$target = $target . basename( $_FILES['photo']['name']);
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
            mysql_select_db('property_management');
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
            
            $id = $_POST['id'];
            $address = $_POST['address'];
			$suburb = $_POST['suburb'];
			$type = $_POST['type'];
			$desc = $_POST['desc'];
			$furnish = $_POST['furnish'];
			$rent = $_POST['rent'];
			$photo = ($_FILES['photo']['name']);
            
			$query = "SELECT * FROM properties WHERE id=$id";
			$result = mysql_query($query);
			if (!$result) { // add this check.
				die('Invalid query: ' . mysql_error());
			}

			if(mysql_num_rows($result) > 0)
			{
				// row exists. do whatever you would like to do.
				$sql = "UPDATE properties SET address = '$address', suburb = '$suburb', type = '$type', description = '$desc', photo = 'images/$photo', furnishings = '$furnish', rent = '$rent' WHERE id = $id" ;
				echo "UPDATED";
			}else{
				$sql = "INSERT INTO properties (id, address, suburb, type, description, photo, furnishings	, rent) VALUES ('$id', '$address', '$suburb', '$type', '$desc', 'images/$photo', '$furnish', '$rent')";
				echo "INSERTED";
			}
			
			//Writes the photo to the server
				if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
				{		
				//Tells you if its all ok
				echo "The file has been uploaded, and your information has been added to the directory";
				}


            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
		 }
	?>