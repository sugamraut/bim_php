<?php

// An array called $vegetables with string keys

$vegetables['corn'] = 'yellow';
$vegetables['beet'] = 'red';
$vegetables['carrot'] = 'orange';


/* echo "<pre>";
print_r($vegetables);
echo "</pre>"; */


// An array called $dinner with numeric keys
$dinner[0] = 'Sweet Corn and Asparagus';
$dinner[1] = 'Lemon Chicken';
$dinner[2] = 'Braised Bamboo Fungus';

/* echo "<pre>";
print_r($dinner);
echo "</pre>"; */

// An array called $computers with numeric and string keys
/* $computers['trs-80'] = 'Radio Shack';
$computers[2600] = 'Atari';
$computers['Adam'] = 'Coleco';

echo "<pre>";
print_r($computers);
echo "</pre>"; */

/* $vegetables = array(
    'corn' => 'yellow',
    'beet' => 'red',
    'carrot' => 'orange'
);

$dinner = array(
    0 => 'Sweet Corn and Asparagus',
    1 => 'Lemon Chicken',
    2 => 'Braised Bamboo Fungus'
);

$computers = array(
    'trs-80' => 'Radio Shack',
    2600 => 'Atari',
    'Adam' => 'Coleco'
); */

/* Choosing a good array name and Example: Array and scalar collision */

// This makes $vegetables an array

$vegetable['corn'] = 'yellow';
$vegetable = 'delicious';

// This removes any trace of "corn" and "yellow" and makes $vegetable

// echo $vegetable;
// echo $vegetable['corn'];

/* Scalar variables are those containing an integer, float, string or boolean. 
   Types like array, objects and resource are not scalar.
*/

// This makes $fruits a scalar
// $fruits = 283;

// This makes $fruits an array and deletes its previous scalar value
// $fruits['potassium'] = 'banana';


/* Creating a Numeric Array and Example Creating numeric arrays with array()*/

//Accessing Array Values
$dinner = array(
    'name1' => 'Sweet Corn & Asparagus',
    'name2' => 'Lemon Chicken',
    'Braised Bamboo Fungus',
    'MoMo'
);

// echo "I want $dinner[0] and $dinner[1].";
// echo "I want $dinner[name1] and $dinner[name2].";
// echo "I want {$dinner['name1']} and {$dinner['name2']}.";

/* Example: Adding elements with [], Create $lunch array with two elements */

// This sets $lunch[0]
$lunch[0] = 'Dried Mushrooms in Brown Sauce';

// This sets $lunch[1]
$lunch[1] = 'Pineapple and Yu Fungus';
$lunch[] = 'Choila';

/* echo "<pre>";
print_r($lunch);
echo "</pre>"; */


/* Example: Adding elements with [], Create $dinner with three elements */


$dinner = array(
    'dish one' => 'Sweet Corn and Asparagus',
    'dish two' => 'Lemon Chicken',
    'dish three' => 'Braised Bamboo Fungus'
);

// Add an element to the end of $dinner

// This sets $dinner[3]
$dinner['dish four'] = 'Flank Skin with Spiced Flavor';

/* echo "<pre>";
print_r($dinner);
echo "</pre>"; */


$dinner_1 = array(
    'name' => 'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
);
$dinner_1[0] = 'Choila';


/* echo "<pre>";
print_r($dinner_1);
echo "</pre>"; */