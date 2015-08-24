<?php
	session_start();
	/*
	 * create constant variables value using define method
	 * just for now
	 * */
	 define('USERNAME', 'biswajit');
	 define('PASSWORD', '1234');
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		//Get their values
		$username = $_POST['name'];
		$password = $_POST['password'];
		
		//validate that aganist the records
		if ($username === USERNAME && $password === PASSWORD)
		{
			//credentials are correct
			
			//login + set session
			$_SESSION['UserName'] = $username;
			header("Location: admin.php");
		}
		else {
			$status = "Incorrect login credentials";
		}
		
	}
	
// 	if (isset($_POST['loginForm']))
// 	{
// 		echo 'Posted';
// 	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			form ul{margin: 0; padding: 0;}
			form li{list-style-type: none; margin-bottom: 1em;}
		</style>
	</head>
	<body>
		<h1>LogIn Form</h1>
		<form action="login.php" method="post">
			<ul>
				<li>
					<label for="name">Name:</label>
					<input type="text" name="name" id="name" />
				</li>
				<li>
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" />
				</li>
				<li>
					<input type="submit" value="LogIn" name="loginForm" />
				</li>			
			</ul>
		</form>
		<?php 
		if(isset($status))
		{
			echo $status;
		}
		?>
	</body>
</html>
