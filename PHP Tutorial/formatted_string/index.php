<?php

$name = "Biswajit Mandal";
$age = 27;

// $greeting = "My name is $name and I am $age old.";
// $greeting = 'My name is'. $name .'and'. 'I am'. $age .'old.';
// printf("My name is %s and I am %d old.",$name,$age);

/* Below the $greeting variable My name is Biswajit Mandal and I am 27 old.43
 * Here 43 extra print this value is total charcters we use sprintf() method
 * */
// $greeting = printf("My name is %s and I am %d old.",$name,$age);
/*
$greeting = sprintf("My name is %s and I am %d old.",$name,$age);

echo $greeting;
*/

/*
 * String Date Formate 
 * */
// printf("Today is %s %s, %d",'July','26th','2015'); 
//Similar  Out put
// $today = sprintf("Today is %s %s, %d",'July','26th','2015'); 
// echo $today;

$today = sscanf("July 26th, 2015","%s %[^,], %d");
print_r($today);

/*
 * Another system list()
 * */
// list($month,$day,$year) = sscanf("July 26th, 2015","%s %[^,], %d");
// echo $month;
sscanf("July 26th, 2015","%s %[^,], %d",$month,$day,$year);
echo $year;
