<?php
namespace Acme\App;

/**
 * This class extends Acme\App\User
 * @author BISWAJIT
 *
 */
class Administrator extends User{
    
    public function __construct()
    {
        $this->isAdmin = true;
    }
    
    /**
     * Log in a user
     * @return string
     */
    public function login(){
        $message = parent::login();
        return $message . '...And loggin the last login date for the administrator. ';
    }
    
    /**
     * This method is for Administrators only
     */
    public function reportForDuty()
    {
        
    }
}