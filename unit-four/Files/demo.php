<?php
//Indexive Array
/* $person = array(
    "Ram Nepali",
    "Kathmandu",
    9999999999,
    "male"
); */

//Associative Array
/* $person = array(
    'name' => "Ram Nepali",
    'address' => "Kathmandu",
    'number' => 9999999999,
    'gender' => "male"
); */

//Multi-dimensional array

$person = array(
    array(
        'name' => "Ram Nepali",
        'address' => "Kathmandu",
        'number' => 9999999999,
        'gender' => "male"
    ),
    array(
        'name' => "Ram Nepali",
        'address' => "Kathmandu",
        'number' => 9999999999,
        'gender' => "male"
    )
);

//Array to JSON conversion
$json_str = json_encode($person);
// echo $json_str;

//JSON to array conversion

$arr = json_decode($json_str, true);
echo "<pre>";
print_r($arr);
echo "</pre>";