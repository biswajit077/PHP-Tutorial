<?php 
// $x = 1000;
// $y = 15;
// function add(){
// 	global $y, $x;
// 	$y = $x + $y;
// 	echo  $y;
// }
// add();
// $x = 'January';
// if ($x == 'January')
// {
// 	echo  "True, This month is $x";
// }

// $x = 10;
// if ($x <> 11) // <> this operator is not equal sign
// {
// 	echo "<span style='background-color:red;'>X = $x</span>";
// }
/* Create a condition system using Array*/

// $month = 'January';
$month = 'jdfjdhfj';
$months = array(
		'January' => 'It\'s a First month of the year',
		'February' => 'It\'s a Second month of the year'
);
// echo "<span style='background-color:red;'>$months[$month]</span>";
echo isset($months[$month])?  $months[$month]:'Not the right month';
?>