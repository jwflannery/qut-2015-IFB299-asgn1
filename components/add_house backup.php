<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update']))
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
			$dbname = 'property_management'; 
			
			$target = "uploads/";
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
            
			$query = "SELECT * FROM properties WHERE id=$id";
			$result = mysql_query($query);
			if (!$result) { // add this check.
				die('Invalid query: ' . mysql_error());
			}

			if(mysql_num_rows($result) > 0)
			{
				// row exists. do whatever you would like to do.
				$sql = "UPDATE properties SET address = '$address', suburb = '$suburb' WHERE id = $id" ;
				echo "UPDATED";
			}else{
				$sql = "INSERT INTO properties (id, address, suburb, type, description, furnishings	, rent) VALUES ('$id', '$address', '$suburb', '$type', '$desc', '$furnish', '$rent')";
				echo "INSERTED";
			}
			


            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
            ?>
               <form method="post" action="addphoto.php">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
				           <tr>
                        <td width="100">ID</td>
                        <td><input name="id" type="number" id="id"></td>
                     </tr>
				  
                     <tr>
                        <td width="100">Address</td>
                        <td><input name="address" type="text" id="address"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Suburb</td>
                        <td><input name="suburb" type="text" id="suburb"></td>
                     </tr>
					 
					                      <tr>
                        <td width="100">Type</td>
                        <td><input name="type" type="text" id="type"></td>
                     </tr>
					 
					                      <tr>
                        <td width="100">Description</td>
                        <td><input name="desc" type="text" id="desc"></td>
                     </tr>
					 
					                      <tr>
                        <td width="100">Furnishings</td>
                        <td><input name="furnish" type="text" id="furnish"></td>
                     </tr>
					 
					  <td width="100">Rent</td>
                        <td><input name="rent" type="number" id="rent"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="update" type="submit" id="update" value="Update">
                        </td>
                     </tr>
                  
                  </table>
				        <input type="hidden" name="size" value="3500000">
						<input type="file" name="photo"> 
               </form>
            <?php
         }
      ?>
   </body>
</html>