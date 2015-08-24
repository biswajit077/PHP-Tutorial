<?php namespace Blog\DB;
$config = array(
        'database' => 'blog',
        'username' => 'root',
        'password' => '1234'
);
function connect($config)
{
    try {
        $dbh = new \PDO('mysql:host=localhost;dbname='.$config['database'], $config['username'], $config['password']);
        $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}

function query($query, $bindings, $conn)
{
    $stmt = $conn->prepare($query);
    $stmt->execute($bindings);
    return ($stmt->rowCount() > 0) ? $stmt : false;

//     $results = $stmt->fetchAll();

//     return $results ? $results : false;
}

function get($tableName, $conn, $limit = 10)
{
    try {
        $result = $conn->query("select *from $tableName ORDER BY id DESC LIMIT $limit");
        return ($result->rowCount() > 0) ? $result : false;
    }catch (Exception $e)
    {
        return false;
    }
}

function get_by_id($id, $conn)
{
    $query =  query('SELECT *FROM posts WHERE id= :id',
            array('id' => $id),
            $conn);
    
    if ($query) return $query->fetchAll();
}