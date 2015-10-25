<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/3/2015
 * Time: 11:29 PM
 */
//Require app files
require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

//set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'jooest@gmail.com', 'password' => '124445558');

//Run validation
$validator = new Validator();
if($validator->validate($data, $rules) == true){

    //Validation passed. Set user values.
    $joost = new User($data);

    $joost->email = 'jooest@yahoo.com';
    $joost->shoesize = '45';
    $joost->password = 'sdsdhsewuyru';

//     $joost->setEmail('jooest@yahoo.com');
    //Dump user
//     var_dump($joost);

    echo $joost;
}
else{

    //Validation failed. Dump validation errors
    var_dump($validator->getError());
}