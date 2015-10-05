<?php
	session_start();
	if(isset($_POST['submit'])){
	ob_start();
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="property_management"; // Database name
	$tbl_name="members"; // Table name
	
	$user = ($_POST['Username']);

	// Connect to server and select databse.
	$conn = mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name")or die("cannot select DB");
	
				$sql = "UPDATE members SET verified = 1 WHERE username = '$user'" ;
				echo "Verified";	
            mysql_query( $sql, $conn );
	
	echo "$user";
	}
	echo "\n <br /><a href=../index.php>Done</a>";
?>