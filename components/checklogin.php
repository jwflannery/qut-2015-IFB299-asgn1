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

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$levelsql="SELECT level FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$verifiedsql = "SELECT verified FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$levelresult=mysql_query($levelsql);
$verifiedresult = mysql_query($verifiedsql);
$levelrow = mysql_fetch_object($levelresult);
$verifiedrow = mysql_fetch_object($verifiedresult);
$level = $levelrow;
$verified = $verifiedrow;
//$level =mysql_query($levelsql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername']="$myusername";
$_SESSION['mypassword']="$mypassword";
$_SESSION['mylevel']="$level->level";
$_SESSION['verification']="$verified->verified";
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}

ob_end_flush();
?>


