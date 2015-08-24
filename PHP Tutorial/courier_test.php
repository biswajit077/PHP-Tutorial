<?php
// require 'courier.php';

function __autoload($classname)
{
    require strtolower($classname).'.php';
    var_dump($classname);
}

$mono = new Courier("Monospace Delivery");

echo $mono->name;
var_dump($mono);