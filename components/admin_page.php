	<head>
		<title>David's Property Management Site</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script type="text/javascript" src="scripts/jquery.js"></script>
	</head>
	
	<body>
	<?php
	session_start();
	if ($_SESSION['verification'] == 1){
		if ($_SESSION['myusername']=="David"){
			echo "David's Page";
			echo "\n <br /><td><a href='add_house.php'>Add a Property </a> </td>";
			echo "\n <br /><td><a href='delete_house.php'> Remove a Property </a> </td>";
			echo "\n <br /><td><a href='edit_house.php'> Edit a Property </a> </td>";
			echo "\n <br /><td><a href='verify_members.php'> Verify Members</a> </td>";
		}
		if ($_SESSION['mylevel'] == 3){
			echo "Owner's Page";
			echo "\n <br /><td><a href='add_house.php'>Add a Property </a> </td>";
			echo "\n <br /><td><a href='delete_house.php'> Remove a Property </a> </td>";
			echo "\n <br /><td><a href='edit_house.php'> Edit a Property </a> </td>";
		}
		if ($_SESSION['mylevel'] == 2){
			echo "Staff Page";
		}
		if ($_SESSION['mylevel'] ==  1){
			echo "Tenant Page";
		}
		echo "\n <br />";
		echo $_SESSION['mylevel'];
		

	
	}else{
		echo "Your account is not verified yet, contact David.";
	}
	?>
		
	</body>
</html>
