<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
<link href="" />
<style type="text/css"></style>
</head>
    <body>
    <?php
        if($results)
        {
            foreach ($results as $row)
            {
                echo $row->first_name."<br/>";
            }
        }
        else {
            echo 'No rows returned.';
        }
	?>
    </body>
</html>