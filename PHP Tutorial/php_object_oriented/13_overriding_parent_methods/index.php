<?php
//PSR - Means Propose Standards Required
//Require app files
require 'autoload.php';

use Acme\App\Validator;
use Acme\App\Administrator;
//Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12345678', 'foo' => 'bar');

//Run validation
$validator = new Validator();
if($validator->validate($data, $rules) == true)
{
    //Validation passed. Set user values
    $joost = new Administrator();

//     var_dump($joost);

    echo $joost->login();
}else {
 //Validation failed. Dump validation errors.
 var_dump($validator->getError());
}