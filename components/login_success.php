

<?php
session_start();
if (!isset($_SESSION['myusermane'])){
	header("location:admin_page.php");
}


?>


<html>
<body>
Login Successful
</body>
</html>