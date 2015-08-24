<?php
	include 'functions.php';
	session_start();
	
	if (!is_logged_in())
	{
		header("Location: login.php");
		die();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Admin Page</h1>
		<h2>Hello,<?php echo $_SESSION['UserName']; ?></h2>
		<a href="logout.php">LogOut</a>
	</body>
</html>