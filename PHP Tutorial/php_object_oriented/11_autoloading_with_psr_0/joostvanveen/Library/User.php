<?php
//Always set the namespace at the top of the class
namespace Joostvanveen\Library;
use Joostvanveen\App\Validator;
use Joostvanveen\App\User as AnotherUser;
class User
{
    /**
     * Let's just dump something to the screen so we know Library\User
     * is instantiated.
     */
    public function __construct()
    {
//         var_dump("Hello from third party User class");

        var_dump(new Validator());
        var_dump(new AnotherUser());
    }
}