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

//run validation
$validator = new Validator();
if($validator->validate($data, $rules) == true){

    //Validation passed. Set user values.
    $joost = new User($data);

    $joost->email = 'jooest@yahoo.com';
    $joost->shoesize = '45';

    //Dump user
    var_dump($joost);
}
else{

    //Validation failed. Dump validation errors
    var_dump($validator->getError());
}