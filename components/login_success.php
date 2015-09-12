

<?php
session_start();
if (!isset($_SESSION['myusermane'])){
	header("location:add_house.php");
}


?>


<html>
<body>
Login Successful
</body>
</html>