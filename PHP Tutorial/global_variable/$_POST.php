<?php
	// 	if(!empty($_POST))
	// 	{
	// 		print_r($_POST);
	// 	}
	
	/* Another process*/
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		// 	print_r($_POST);
		/* mail($to, $subject, $message, $additional_headers, $additional_parameters)*/
		if (mail('mandaljith@yahoo.com', 'New website message', htmlspecialchars($_POST['message']) ) )
		{
			$status = "Thank you for your message.";
		}
	
	}
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
	<h1>Contact Form</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" />
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" />
			</li>
			<li>
				<label for="message">Message:</label><br/>
				<textarea rows="10" cols="28" name="message" id="message"></textarea>
			</li>
			<li>
				<input type="submit" value="Go!" />
			</li>
		</ul>
	</form>
	<?php if(isset($status))echo $status; ?>
</body>
</html>