<?php
namespace Acme\App;

/**
 * This class extends Acme\App\User
 * @author BISWAJIT
 *
 */
class Member extends User{
       
    /**
     * Log in a user
     * @return string
     */
    public function login(){
        
        return '...Set a flag in the online Members table. ';
    }
    
}