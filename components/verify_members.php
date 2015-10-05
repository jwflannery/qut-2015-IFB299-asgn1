<html>
   <form name ="veriform" method="post" action="verifyaction.php">
	<?php
	session_start();
	ob_start();
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="property_management"; // Database name
	$tbl_name="members"; // Table name

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");
	echo "<select name='Username'>";
	$query = "SELECT * FROM members WHERE verified = 0";
	$result = mysql_query($query);
	while ($row = mysql_fetch_object($result)) {
		echo "<option value='".$row->username."'>".$row->username."</option>";
	}
	echo "</select>";
	?>
	<input type="submit" name="submit" value="submit"/>
    </form>
</html>
