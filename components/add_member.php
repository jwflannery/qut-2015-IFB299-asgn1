<?php
         if(isset($_POST['update']))
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
			$dbname = 'property_management'; 
			
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
            mysql_select_db('property_management');
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
            
            $id = $_POST['id'];
            $username = $_POST['username'];
			$password = $_POST['password'];
            
			$query = "SELECT * FROM members WHERE id=$id";
			$result = mysql_query($query);
			if (!$result) { // add this check.
				die('Invalid query: ' . mysql_error());
			}

			if(mysql_num_rows($result) > 0)
			{
				// row exists. do whatever you would like to do.
				$sql = "UPDATE members SET username = '$username', password = '$password' WHERE id = $id" ;
				echo "UPDATED";
			}else{
				$sql = "INSERT INTO members (id, username, password) VALUES ('$id', '$username', '$password')";
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
		 Echo "<a href=../index.php>Done</a>"
	?>
	