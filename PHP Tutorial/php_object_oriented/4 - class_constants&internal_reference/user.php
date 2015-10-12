<?php
class User{
    public $email;
    public $password;
    const MICHARS = 8; // class constant using or scope only in the class
    
    public function login()
    {
        return 'logging in =with a vengeange ...';
    }
    
    public function logout(){
        return 'logging out ...';
    }
    
    public function setPassword($string){
        if(strlen($string) <self::MICHARS){ // Here self:: is the class reference of property, method, constant, etc.
            throw new Exception("Password must be greater than 8 string");
        }
        
        $this->password = hash('sha256', $string);
    }
}