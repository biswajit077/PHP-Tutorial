<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/4/2015
 * Time: 12:07 AM
 */
function getHash($data){
    return hash('sha256', $data);
}

/**
 * Autoload required file, when class is call for which class file needed
 * @param unknown $className
 */
function autoload($className){
    $file = dirname(__FILE__). '/'. $className . '.php';
    if (file_exists($file))
    {
        require $file;
    }
}

spl_autoload_register('autoload');