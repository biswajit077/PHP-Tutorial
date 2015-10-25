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

var_dump($joost->getPassword());