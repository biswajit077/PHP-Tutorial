<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/3/2015
 * Time: 11:29 PM
 */
require 'user.php';

$joost = new User();
$joost->setPassword('12345678');
$joost->setEmail('joost@gmail.com');
//$mike = $joost; //copy process (work same object)
$mike = clone $joost; //clone process (work seperate object)

$mike->setEmail('mike@gail.com');
$joost->setEmail('joost@gmail.com');
var_dump($joost);
echo '<br/>';
var_dump($mike);
echo '<br/>';