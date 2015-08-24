<?php
require 'config.php';
#mysql_connect('localhost', 'root', 'password');

$id = 1;
$letters = 'B';
try {
    $conn = new PDO('mysql:host=localhost; dbname=blog', $config['DB_USERNAME'], $config['DB_PASSWORD']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    /* Anti-pattern*/
//     $results = $conn->query('SELECT *FROM users WHERE id='.$id);

   /* Strong or secure*/
//     $results = $conn->query('SELECT *FROM users WHERE id='.$conn->quote($id));
    
//     foreach ($results as $row)
//     {
//         print_r($row);
//     }
    
    /* More strong secure using bainding query*/
//     $stmt = $conn->prepare('SELECT *FROM users WHERE id = :id');
    $stmt = $conn->prepare('SELECT *FROM users WHERE first_name LIKE :letters');
//     $stmt->execute(
//             array(
//                     'id' => $id
//             ));
    $stmt->execute(
            array(
                    'letters' => $letters.'%'
                  ));
/* Similar to binding*/
//     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//     $stmt->bindParam(':letters', $letters, PDO::PARAM_STR);
//     $stmt->execute();
    while ($row = $stmt->fetch()) //while($row = $stmt->fetch(PDO::FETCH_OBJ))
    {
        print_r($row);
    }
}
catch (PDOException $e)
{
    echo 'Error: '. $e->getMessage();
}
