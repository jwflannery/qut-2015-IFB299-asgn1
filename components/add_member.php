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
            
			$all = "SELECT * FROM members";
			$num_all = mysql_query($all);
            $username = $_POST['username'];
			$password = $_POST['password'];
			$level = $_POST['level'];
            $id = mysql_num_rows($num_all) + 1; //$_POST['id'];
			$query = "SELECT * FROM members WHERE id=$id";
			$result = mysql_query($query);
			if (!$result) { // add this check.
				die('Invalid query: ' . mysql_error());
			}
			
			if(mysql_num_rows($result) > 0)
			{
				// row exists. do whatever you would like to do.
				//$sql = "UPDATE members SET username = '$username', password = '$password' WHERE id = $id" ;
				//echo "UPDATED";
			}else{
				$sql = "INSERT INTO members (id, username, password, level) VALUES ('$id', '$username', '$password', '$level')";
				echo "INSERTED";
			}
			
			
            $retval = mysql_query( $sql, $conn );
            
			if ($level == 1 || level == 3){
				$sql = "UPDATE members SET verified = 1";
			}
			
			$retval = mysql_query($sql, $conn);
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
		 }
		 Echo "<a href=../index.php>Done</a>"
	?>
	