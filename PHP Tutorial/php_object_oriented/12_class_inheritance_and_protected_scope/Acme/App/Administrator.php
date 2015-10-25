<?php
namespace Acme\App;
use Acme\App\User;
class Administrator extends User{
    
    public function __construct()
    {
        $this->isAdmin = true;
    }
    /**
     * Return the result of the login()
     */
    public function getLogin(){
        return $this->login();
    }
    
    public function reportForDuty()
    {
        
    }
}