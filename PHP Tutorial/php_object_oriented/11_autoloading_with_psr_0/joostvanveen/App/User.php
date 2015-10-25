<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/3/2015
 * Time: 11:30 PM
 */
 namespace Joostvanveen\App;
 
class User{
    /**
     * 
     * @var string
     */
    private $email;
    /**
     * 
     * @var string
     */
    private $password;
    /**
     * All properties that can be set directly
     * @var array
     */
    private $fillable = array('email','password');
    /**
     * All properties that can be gotten directly
     * @var array
     */
    private $accessiable = array('email','password');

    /**
     * Class configuration only
     * @param array $params
     */
    public function __construct(Array $params = array()){
        //Class configuration
        if(count($params)){
            foreach($params as $key => $value){
                $this->$key = $value;
            }
        }
    }

    /**
     * Directly set inaccessible but existing propoerties, if in $this->fillable array
     * @param string $name
     * @param mixed $value
     * @return void
     */
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
    
    /**
     * Directly get inaccessible but existing propoerties, if in $this->accessible array
     * @param string $name
     * @return mixed
     */
    public function __get($name){
        //Called when trying to get the value of an inaccessible property in an object
        //Do not return if not accessible
        if(! in_array($name, $this->accessiable)){
            return NULL;
        }
        
        return isset($this->$name)? $this->$name : NULL;
    }
    
    /**
     * Return accessible properties as a json object
     * @return string
     */
    public function __toString(){
        //Called when an object is cast to a string
        //echo $joost
        
        $data = array();
        
        //Only ass property accessible
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
}