<?php
session_start();
echo $_SESSION['username'];

session_destroy(); //session destroy
$_SESSION = array(); // Re-initialize global $_SESSION variable

print_r($_SESSION);
