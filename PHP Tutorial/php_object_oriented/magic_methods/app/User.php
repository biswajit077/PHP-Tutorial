<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/3/2015
 * Time: 11:30 PM
 */
class User{
    private $email;
    private $password;

    public function __construct(Array $params = array()){
        //Class configuration
        if(count($params)){
            foreach($params as $key => $value){
                $this->$key = $value;
            }
        }
    }

    public function __set($name, $value){
        //Called when trying to set an inaccessible property in object
        if(isset($this->$name)){
            $this->$name = $value;
        }
    }
    /**
     * Log in a user
     * @return string
     */
    public function login(){
        return 'Logging in with a vengeange ...';
    }

    /**
     * Log out a user
     * @return string
     */
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