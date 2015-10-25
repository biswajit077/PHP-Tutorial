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