<?php 
// 	setcookie('font-size', 25, time()+3600, '/');

	setcookie('Prefs[font-size]',25);
	setcookie('Prefs[favouriteCategory]',25);
	setcookie('Prefs[screenWidth]',25);
// 	if (isset($_COOKIE['font-size']))
// 	{
		
// 	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
	<title>Insert title here</title>
	<link href="" />
	<style type="text/css">
		body{font-size: <?php echo $_COOKIE['font-size']; ?>}
	</style>
</head>
    <body>
    	<p>Paragraph Text</p>
    	<?php
    		if (isset($_COOKIE['Prefs']))
    		{
	    		foreach ($_COOKIE['Prefs'] as $key => $value)
	    		{
	    			echo '<li>'.htmlspecialchars($key).' = '.htmlspecialchars($value);
	    		}
    		}
    	?>
    </body>
</html>