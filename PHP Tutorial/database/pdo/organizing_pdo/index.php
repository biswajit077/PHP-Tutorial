<?php 
require 'functions.php';
$conn = connect($config);
if ($conn)
{
    $users = get('users',$conn);
}
else 
{
    die("Could not connect to the db.");
}
?>
<!DOCTYPE html>
<html>
    <head><title></title></head>
    <body>
        <?php 
            if ($users)
            {
                foreach ($users as $user)
                {
                    echo "<li>{$user['first_name']}</li>";
                }
            }
            else
            {
                echo "No rows returned.";
            }
        ?>
    </body>
</html>