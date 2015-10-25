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

    public function login(){
        return 'Logging in with a vengeange ...';
    }

    public function logout(){
        return 'Logging out ...';
    }

    public function setPassword($string){
        $this->password = $string;
        return $this;
    }

    public function getPassword(){
       return $this->password;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }
}