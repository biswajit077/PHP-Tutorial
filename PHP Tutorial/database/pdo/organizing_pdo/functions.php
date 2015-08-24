<?php 

$config = array('username'=>'root', 'password'=>'1234');

function connect($config)
{
    try {
        $conn = new  PDO('mysql:host=localhost; dbname=blog', $config['username'], $config['password']);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    }
    catch (Exception $e)
    {
        return false;
    }
}

function get($tableName, $conn)
{
    try {
        $result = $conn->query("select * from $tableName");
        return  ($result->rowCount() > 0)? $result:false;
    }
    catch (Exception $e)
    {
        return false;
    }
}

function query($query, $bindings, $conn){
    $stmt = $conn->prepare($query);
    $stmt->execute($bindings);
    
    $results = $stmt->fetchAll();
    return $results ? $results : false;
}
?>