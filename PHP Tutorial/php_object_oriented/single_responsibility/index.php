<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/3/2015
 * Time: 11:29 PM
 */
require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

//set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'jooest@gmail.com', 'password' => '124445558');

//run validation
$validator = new Validator();
if($validator->validate($data, $rules) == true){
    $joost = new User();
    $joost->setEmail($data['email'])
        ->setPassword(getHash($data['password']));
    var_dump($joost);
}
else{
    var_dump($validator->getError());
}