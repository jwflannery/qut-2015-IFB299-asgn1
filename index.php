<html>
	<head>
		<title>David's Property Management Site</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script type="text/javascript" src="scripts/jquery.js"></script>
	</head>
	
	<body>
		<div id="container">
		
			<?php include ("components/header.php"); ?>
			<?php include ("components/main_login.php"); ?>
			<form name="registerform" method="post" action="components/register.php">
			<input type="submit" name="Register" value="Register"></td>
			</form>
			
			<div id="page">
				<div id="query"></div>
				
				<?php include ("components/filterform.php"); ?>
				
				<div id="searchresults"></div> 
			</div>
			
			<?php include ("components/footer.php"); ?>
			
		</div>
		
		<script type="text/javascript" src="scripts/postfilterform.js"></script>

	
		
	</body>
</html>