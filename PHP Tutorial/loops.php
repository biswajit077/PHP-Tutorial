<?php
// $arr = array("name A","name B","name C","name D");
$arr = [ 
		'name A',
		'name B',
		'name C',
		'name D' 
];
foreach ( $arr as $name ) {
	echo $name . "<br/>";
}

/* Associativity Array */
// $arr1 = array('A'=>'name A','B' => 'name B');
$arr1 = [ 
		'A' => 'name A',
		'B' => 'name B' 
];
foreach ( $arr1 as $name ) {
	echo $name . "<br/>";
}

foreach ( $arr1 as $title => $name ) {
	echo "<li><strong>$title</strong> - $name</li>";
}

$arr = array (
		"name A",
		"name B",
		"name C",
		"name D" 
);
for($i = 0; $i < count ( $arr ); $i++) {
	echo $arr[$i]."<br/>";
}

$i = 0;
while ( $i < count($arr) ) {
	echo $arr[$i]."<br/>";
	$i++;
}