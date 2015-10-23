<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/7/2015
 * Time: 11:29 PM
 */

/**
 * Create a Array to Object Example
 */

//Associative array to Object
$arr = array(
        "one" => "abc",
        "two" => 123.5,
        "three" => array(1,2,3),
        1 => "two"
    );
$key = "abc";
$obj = (object) $arr;

echo "First value = $obj->one\n";
echo "Second value = $obj->two\n";
//echo "Third value = $obj->three\n"; //index three is array so echo can't run
echo "Third value = $obj->two\n";

echo '<pre>'.print_r($obj).'</pre>';

//Indexing array to Object
$arr = array(
    "abc",
     123.5,
     array(1,2,3),
    "two"
);
$obj = (object) $arr;

echo 'Only Testing';
//echo "First Value = $obj[0]"; //Cannot access this object array
echo '<pre>'.print_r($obj).'</pre>';

/**
 * PHP Access Element in Multidimensional Array
 */
$myBooks = array(
    array(
        "title" =>  "Learn PHP from java2s.com",
        "author" =>  "java2s.com",
        "pubYear" =>  2000
    ),
    array(
        "title" =>  "Learn Java from java2s.com",
        "author" =>  "JavaAuthor",
        "pubYear" =>  2001
    ),
    array(
        "title" =>  "Learn HTML from java2s.com",
        "author" =>  "HTMLAuthor",
        "pubYear" =>  2002
    ),
    array(
        "title" =>  "Learn CSS from java2s.com",
        "author" =>  "CSSAuthor",
        "pubYear" =>  2003
    ),
);
print_r( $myBooks[1] );
echo $myBooks[3]["title"]." published year ".$myBooks[3]["pubYear"] . "\n";

/**
 * PHP Loop Through Multidimensional Array
 */
foreach ( $myBooks as $book ) {
    foreach ( $book as $key => $value ) {
        echo "$key : $value\n";
    }
    echo "########################\n";
}

/**
 * The list() function is used to assign values to a list of variables in one operation.
 */
$myBook = array( "Learn PHP from java2s.com", "java2s.com", 2000 );
list( $title, $author, $pubYear ) = $myBook;

echo $title . "\n";
echo $author . "\n";
echo $pubYear . "\n";

/**
 * Use foreach, while and list to loop through associate array
 */

$characters = array(
    array(
        "name" => "A",
        "occupation" => "A1",
        "age" => 30,
        "special power" => "A3"
    ),
    array(
        "name" => "B",
        "occupation" => "B1",
        "age" => 24,
        "special power" => "B2"
    ),
    array(
        "name" => "C",
        "occupation" => "C1",
        "age" => 45,
        "special power" => "C2"
    )
);

foreach ($characters as $c) {
    while (list($k, $v) = each ($c)) {
        echo "$k : $v \n";
    }
}


/**
 * To manipulate the pointer and access the elements that it points to, use the following functions:
 * Function	Description
 *current()	Get pointer of the current element, without changing the pointer position.
 *key()	    Get the index of the current element pointed to by the pointer, without changing the pointer position.
 *next()	Move the pointer forward to the next element, and returns that element's value.
 *prev()	Move the pointer backward to the previous element, and returns that element's value.
 *end()	    Move the pointer to the last element in the array, and returns that element's value.
 *reset()	Move the pointer to the first element in the array, and returns that element's value.
 */
$authors = array( "Java", "PHP", "CSS", "HTML" );
echo "The array: " . print_r( $authors, true ) . "\n";
echo "The current element is: " . current( $authors ) . "\n";
echo "The next element is: " . next( $authors ) . "\n";
echo "...and its index is: " . key( $authors ) . "\n";
echo "The next element is: " . next( $authors ) . "\n";
echo "The previous element is: " . prev( $authors ) . "\n";
echo "The first element is: " . reset( $authors ) . "\n";
echo "The last element is: " . end( $authors ) . "\n";
echo "The previous element is: " . prev( $authors ) . "\n";

/**
 * Each function (Now Today do not support)
 */
$element = each( $myBooks );
echo "Key: " . $element[0] . "\n";
echo "Value: " . $element[1] . "\n";
echo "Key: " . $element["key"] . "\n";
echo "Value: " . $element["value"] . "\n";
while ( $element = each( $myBooks ) ) {
    echo " < dt > $element[0] < /dt > ";
    echo " < dd > $element[1] < /dd > ";
}


/**
 * Count array size or length
 */
$size = count($myBooks);
echo 'My Book array size = '.$size."\n"; //Here '\n' not work but work only "\n"

/**
 * array_keys: Return all the keys of an array
 * array_values: Return all the values of an array : Associate Array
 */
$population = array("Ohio" => "11,421,267", "Iowa" => "2,936,760");
$popkeys = array_keys($population);
print_r($popkeys); // Array( [0] => Ohio [1] => Iowa )
$popvalues = array_values($population);
print_r($popvalues); // Array ( [0] => 11,421,267 [1] => 2,936,760 )