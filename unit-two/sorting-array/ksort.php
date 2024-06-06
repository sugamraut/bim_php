<?php

/* 

//Ascending Sorting
1. sort() //sorts an array in ascending order according to value 
                                -> only for indexive array
2. asort() //sorts an array in ascending order according to value 
                                -> only for associative array
3. ksort() //sorts an array in ascending order according to key

//Descending Sorting

4. rsort() //sorts an array in descending order according to value
5. arsort() //sorts an array in descending order according to value
6. krsort() //sorts an array in descending order according to key


*/

$meal = array(
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
);

echo "Before Sorting: " . "<br>";

foreach ($meal as $key => $value) {
    echo "$key: " . $value . "<br>";
}

echo "<br>";

// ksort($meal);
krsort($meal);


echo "After Sorting: " . "<br>";
foreach ($meal as $key => $value) {
    echo "$key: " . $value . "<br>";
}