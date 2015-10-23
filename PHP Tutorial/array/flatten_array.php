<?php
$array = [
        'name' => [
                'Your name is required',
                'Your name cannot contain any numbers',
                'key' => ['Something']
        ],
        'dob' => [
                'Your date of birth is required'
        ],
        'password' => [
                'Your password must be 6 characters or more',
                'Your password isn\'t strong enough'
        ],
        'Something else'
];

function flatten_array(array $items, array $flattened = []) {
    foreach ($items as $item)
    {
        if(is_array($item)){
            $flattened = flatten_array($item, $flattened);
            continue;
        }
        $flattened[] = $item;
    }
    return $flattened;
}
var_dump(flatten_array($array));

/**
 * Another Flatten array
 */
$flattened = new RecursiveArrayIterator($array);
$flattened = new RecursiveIteratorIterator($flattened);
$flattened = iterator_to_array($flattened, false);

var_dump($flattened);

$flattened = iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator($array)), false);
var_dump($flattened);