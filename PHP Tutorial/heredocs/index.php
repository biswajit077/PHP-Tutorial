<?php
$post = array(
		'author' => 'Biswajit',
		'title' => 'My Awesome post',
		'body' => 'Here is the body',
		'publish-date' => '27-7-2015'
);

// $email = "<h1>{$post['title']}</h1>";
// $email .="<p>{$post['author']}</p>";
// $email .= "<div>{$post['body']}</div>";

// echo $email;

/* Another Process */

// $email = sprintf("<h1>%s</h1><p>%s</P><div>%s<?div>",$post['title'], $post['author'], $post['body']);
// echo $email;

/* Using extract() method for associative array key in individual variable */
// extract($post);
// echo "<h1>$title</h1><p>$author</p><div>$body</div>";

/*
 * Using heredocs syntax amd Identifier EOT or EOD or TEXT
 * Heredoc text behaves just like a double-quoted string without the double quotes,
 * */
// $email = <<<EOT
// 	<h1>{$post['title']}</h1>
// 	<p>By: {$post['author']}</p>
// 	<div>{$post['body']}</div>
// EOT;
// echo $email;

/*
 * Using heredocs syntax amd Identifier TEXT
 * */
// $email = <<<TEXT
// 	<h1>{$post['title']}</h1>
// 	<p>By: {$post['author']}</p>
// 	<div>{$post['body']}</div>
// TEXT;

extract($post);
$email = <<<TEXT
	<h1>$title</h1>
	<p>By: $author</p>
	<div>$body</div>
TEXT;
echo $email;