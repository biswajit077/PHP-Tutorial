<?php
session_start();
//Viewer: Can this be abstracted away to a reuseable function?
if (!isset($_SESSION['UserName']))
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