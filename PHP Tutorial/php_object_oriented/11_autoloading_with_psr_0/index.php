<?php
//PSR - Means Propose Standards Required
//Require app files
require 'autoload.php';


//Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12345678', 'foo' => 'bar');

//Run validation
$validator = new Joostvanveen\App\Validator();
if($validator->validate($data, $rules) == true)
{
    //Validation passed. Set user values
    $joost = new Joostvanveen\App\User();
    var_dump($joost);
    
    $nick = new Joostvanveen\Library\User();
    var_dump($nick);

    //Dump user
//     var_dump($joost);

    echo $joost;
}else {
 //Validation failed. Dump validation errors.
 var_dump($validator->getError());
}