<?php
session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:host=127.0.0.1; dbname=website', 'root', 'root');

//start protect of CSRF
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if(!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])){
        die('Invalid CSRF token');
    }
}

//Generate a Token session
$_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));
//end protect of CSRF