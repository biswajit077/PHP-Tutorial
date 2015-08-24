<?php
require 'blog.php';
use Blog\DB;

// foreach($conn->query('SELECT * from posts') as $row) {
//     print_r($row);
// }

$posts = DB\get('posts', $conn);

view('index', array(
        'posts' => $posts,
        'name' => 'Biswajit'
));