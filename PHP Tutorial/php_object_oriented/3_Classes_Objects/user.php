<?php
class User{
    //inside this class call is properties and outside call it variables
    public $email;
    public $password; 
    
    
    //inside this class call is function and outside call it method
    public function login(){
        return 'Loggin in ...';
    }
    
    public function logout(){
        return 'Loggin out ...';
    }
}