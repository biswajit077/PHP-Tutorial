<?php
//Always set the namespace at the top of the class
namespace Acme\Library;
use Acme\App\Validator;
use Acme\App\User as AnotherUser;
class User
{
    //private properties and methods cannot visible inside class not chield or outside class
    //protected properties and methods visible inside class and child class but not outside class
    //public properties and methods visible inside class, child class and outside class
    /**
     * Let's just dump something to the screen so we know Library\User
     * is instantiated.
     */
    public function __construct()
    {
//         var_dump("Hello from third party User class");

//         var_dump(new Validator());
//         var_dump(new AnotherUser());
    }
    
    /**
     * Log in a user
     * @return string
     */
//     public function login(){
//         return 'Logging in from User class ...';
//     }

    /**
     * Not access Administrator class
     */
//     private function login(){
//         return 'Logging in from User class ...';
//     }

    /**
     * Now access Administrator class but not for object in class
     */
    protected  function login(){
        return 'Logging in from User class ...';
    }
}