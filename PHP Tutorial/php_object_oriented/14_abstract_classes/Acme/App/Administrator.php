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
        
        return 'Do stuff' . '...Log this action in an administrator\'s table. ';
    }
    
    /**
     * This method is for Administrators only
     */
    public function reportForDuty()
    {
        
    }
}