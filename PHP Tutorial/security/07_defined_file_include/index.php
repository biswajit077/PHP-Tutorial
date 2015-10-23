<?php
if (!isset($_GET['show']))
{
    die();
}

$show = $_GET['show'];
$allowed = ['cats', 'dogs'];
$content = in_array($show, $allowed)?file_get_contents("content/{$show}.php") : '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>File includes</title>
    </head>
    <body>
        <?php echo $content; ?>
    </body>
</html>