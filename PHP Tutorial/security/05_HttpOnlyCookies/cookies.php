<?php
$week = new DateTime('+1 week');
/**
 * bool setcookie ( string $name [, string $value = "" [, int $expire = 0 [, string $path = "" [, string $domain = "" [, bool $secure = false [, bool $httponly = false ]]]]]] )
 */
// setcookie('key', 'value', $week->getTimestamp()); 

//Now setcookie only http (For secure purpose)
setcookie('key', 'value',$week->getTimestamp(), '/', null, null, true);

//Retrieve cookie server side or back-end

$sc = $_COOKIE['key'];
echo $sc;