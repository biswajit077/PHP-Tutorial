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
    private $fillable = array('email','password');
    private $accessiable = array('email','password');

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
       
        if(! in_array($name, $this->fillable))
        {
            return false;
        }
        if(isset($this->$name)){
            $this->$name = $value;
        }
    }
    
    public function __get($name){
        //Called when trying to get the value of an inaccessible property in an object
        
        if(! in_array($name, $this->accessiable)){
            return NULL;
        }
        
        return isset($this->$name)? $this->$name : NULL;
    }
    
    public function __toString(){
        //Called when an object is cast to a string
        //echo $joost
        
        $data = array();
        
        foreach ($this->accessiable as $key){
            $data[$key] = $this->$key;
        }
        
        return json_encode($data);
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