<?php
function say_hello()
{
	return "Hi, there";
}

say_hello(); //Nothing show

echo say_hello(); // Display Hi, there

/*
 * Passing parameter
 * */

function hello($name)
{
	return "Hello, $name";
}

echo hello("Biswajit");


function array_pluck($toPluck, $arr)
{
	$ret = array();
	foreach ($arr as $item)
	{
		$ret[] = $item[$toPluck];
	}
	return $ret;
}
$people = array(
		array('name'=>'Biswajit', 'age'=>'27', 'occupation'=>'student'),
		array('name'=>'Jeffery', 'age'=>'50', 'occupation'=>'Web Developer'),
		array('name'=>'Joe', 'age'=>'50', 'occupation'=>'Marketing')
);

print_r(array_pluck('name', $people));