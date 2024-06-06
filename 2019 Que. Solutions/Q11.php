<?php
/* 
   Write a PHP function that accepts list of countries and a search value as a parameter
   and checks whether the search value is in the list or not.
*/

function countriesSearch($data, $list)
{
    if (is_array($data)) {
        foreach ($data as $value) {
            checkCountry($value, $list);
        }
    } else {
        checkCountry($data, $list);
    }
}

function checkCountry($data, $list)
{
    if (in_array($data, $list)) {
        echo "The search value in the list is: " . $data . "<br>";
    } else {
        echo "The search value is not in the list is: " . $data;
    }
}

$countryName = array(
    'Nepal',
    'India',
    'China'
);

echo countriesSearch('Nepal', $countryName);