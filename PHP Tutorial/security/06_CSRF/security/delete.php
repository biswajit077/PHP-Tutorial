<?php
require 'app/bootstrap.php';
//start protect of CSRF
if($_SERVER['REQUEST_METHOD'] !== 'POST')
{
    die();
}
//end protect of CSRF
$delete = $db->prepare("UPDATE users SET active = 0 WHERE id =:user_id");

$delete->execute([
        'user_id' => $_SESSION['user_id']
]);

//