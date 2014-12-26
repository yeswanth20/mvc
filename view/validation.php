<?php

ini_set('display_error',1);
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');

$sql="INSERT INTO login_users(Name,UserName,Password,Email,gender)
VALUES('$_POST[name]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[gender]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
else{
	echo '<script>alert("Successfully Registered");</script>';
}

?>
<html>
	<head></head>
	<body>
		<h1>Please Login to access your account</h1>
		<button id="myButton">Login</button>
		<script type="text/javascript">
		document.getElementById("myButton").onclick = function () {
			location.href = "home.php";
		};
</script>

	</body>
</html>