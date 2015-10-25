<?php
//Require app files
require 'App/Helper.php';
require 'App/User.php';
require 'App/Validator.php';
require 'Library/User.php';

//Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12345678', 'foo' => 'bar');

//Run validation
$validator = new Validator();
if($validator->validate($data, $rules) == true)
{
    //Validation passed. Set user values
    $joost = new User();
    var_dump($joost);
    
    $nick = new Library\User();
    var_dump($nick);

    //Dump user
//     var_dump($joost);

    echo $joost;
}else {
 //Validation failed. Dump validation errors.
 var_dump($validator->getError());
}