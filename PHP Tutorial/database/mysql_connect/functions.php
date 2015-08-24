<?php
/* Using the improve mysql_connect API is and ANTI-PATTERNS! ONLY FOR REFERENCE */

/* First Connect MySql Database*/
// mysql_connect('localhost', 'root', '1234') or die('Could not connect'); //mysql arly version 
// $conn = mysqli_connect('localhost', 'root', '1234') or die('Could not connect'); // mysql improve version

// /* Select Database*/
// mysqli_select_db($conn,'blog');

// /* */
// $results = mysqli_query($conn, "SELECT *FROM users");

// while ($row = mysqli_fetch_object($results))
// {
//     echo $row->first_name;
//     print_r($row);
// }

/* we create functions above the all processs */

function connect($host = 'localhost', $username, $password, $db = '') {
    $conn = mysqli_connect($host, $username, $password);
    
    if(!empty($db))
    {
        mysqli_select_db($conn, $db);
    }
    return $conn;
    }
    
function query($conn, $query)
{
    $results = mysqli_query($conn, $query);
    
    if ($results)
    {
        $rows = array();
        while ($row = mysqli_fetch_object($results))
        {
            $rows[] = $row;
        }
        return $rows;
    }
    return false;
}