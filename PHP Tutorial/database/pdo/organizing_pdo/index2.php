<?php
require 'functions.php';
$conn = connect($config);
if ($conn)
{
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 2;
    $rows = query("SELECT *FROM users WHERE id = :id",array('id' => $id), $conn);
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
            if ($rows)
            {
//                 var_dump($rows);
                foreach ($rows AS $row)
                {
                     echo "<h1>".$row['first_name'] ."'s Profile</h1>";
//                      echo "<li>{$row['first_name']}</li>";
                }
            }
            else
            {
                echo "No User.";
            }
        ?>
    </body>
</html>