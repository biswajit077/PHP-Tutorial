<?php
// $name = $_GET;
echo $_GET ['name'];
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
	<h1>Super Globals</h1>
<?php
if (isset($_GET['job']))
{
	//Below this line is not secure 
// 	echo $_GET['job'];	
	
	//Secure system
	/*
	 * for example 
	 * some text <code> kjkjfjdkfjkdf
	 * <h1>Header text</h1>
	 * <p>paragraph text</p>
	 * above all lines are under the <code> tag
	 * solution &lt;code> or htmlspecialchars()
	 * */
	echo htmlspecialchars($_GET['job']);
}
else {
	echo "Redirect to Another page";
}

?>
</body>
</html>
