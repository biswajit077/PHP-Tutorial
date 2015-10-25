<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/3/2015
 * Time: 11:30 PM
 */
class User{
//    public $email;
    private $email;
    private $password;
    const MINCHARS = 8;

    public function login(){
        return 'Logging in with a vengeange ...';
    }

    public function logout(){
        return 'Logging out ...';
    }

    public function setPassword($string){
        if($this->validatePassword($string) == false){
            throw new Exception('The password should be at least'. self::MINCHARS.'charcters long.');
        }
        $this->password = hash('sha256',$string);
    }

    public function getPassword(){
       return $this->password;
    }

    public function setEmail($email){
        if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('Please provide a valid email.');
        }
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    private function validatePassword($string){
        return strlen($string) < self::MINCHARS ? false : true;
    }
}