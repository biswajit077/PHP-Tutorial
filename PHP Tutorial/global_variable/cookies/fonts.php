<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		setcookie('font-size', (int) $_POST['font-size'], time()+60*60);
		header('Location: fonts.php');
	}
	
// 	if(isset($_POST['font-size']))
// 	{
// 		$font_size = $_POST['font-size'];
// 	}else if(isset($_COOKIE['font-size']))
// 	{
// 		$font_size = $_COOKIE['font-size'];
// 	}else{
// 		$font_size = 16;
// 	}

	$font_size = isset($_COOKIE['font-size']) ? $_COOKIE['font-size']. 'px': '16px';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
<link href="#" />
<style type="text/css">
	body{ font-size: <?php echo $font_size; ?>}
	form ul{padding: 0; margin: 0;}
	form li{list-style-type: none;}
</style>
</head>
    <body>
    	<form action="" method="post">
    		<ul>
	    		<li>
	    			<label for="font-size">Your Preferred font size?</label>
	    			<select name="font-size" id="font-size">
	    				<option value="10">10</option>
	    				<option value="20">20</option>
	    				<option value="30">30</option>
	    			</select>
	    		</li>
	    		<li>
	    		<input type="submit" name="submit" value="Submit" />
	    		</li>
    		</ul>
    	</form>
    	<h2>My Page</h2>
    	<p>Some text here for paragraph Some text here for paragraph Some text here for paragraph Some text here for paragraph</p>
    </body>
</html>