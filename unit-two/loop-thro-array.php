<?php
/* Example: Looping with foreach() */

$meals = array(
    'Burger' => 0.7,
    'Momo' => 1.1,
    'Choila' => 1.3,
    'Hot Dog' => 2.3
);

foreach ($meals as $dish => $value) {
    // echo "The price of " . $dish . " is: " . "\$$value" . "<br>";
}


/* Example: Modifying an array with foreach() */

$meals = array(
    'Burger' => 0.7,
    'Momo' => 1.1,
    'Choila' => 1.3,
    'Hot Dog' => 2.3
);

foreach ($meals as $dish => $price) {

    /* $price = $price * 2;
    echo "The price of $dish is: " . $price . "<br>"; */

    /* $meals[$dish] = $meals[$dish] * 2;
    echo "The price of $dish is: " . $meals[$dish] . "<br>"; */
}


/* Example: Using foreach() with numeric arrays */

/* $dinner = array(
    'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
);


foreach ($dinner as $val) {
    echo "You can eat: $val" . "<br>";
} */

/* Example: Array element order and foreach() */

/* $letters[0] = 'A';
$letters[1] = 'B';
$letters[2] = 'C';
$letters[3] = 'D';

foreach ($letters as $value) {
    echo $value . "<br>";
} */


/* Example: Checking for an element with a particular key */

/* $meals = array(
    'Burger' => 0.7,
    'Momo' => 1.1,
    'Choila' => 1.3,
    'Hot Dog' => 2.3
);

if (array_key_exists('Choila', $meals)) {
    echo "Yes we have Choila in our menu.";
} */


/* Example: Finding an element with a particular value */

/* $meals = array(
    'Burger' => 0.7,
    'Momo' => 1.1,
    'Choila' => 1.3,
    'Hot Dog' => 2.3
);

if (array_search(0.7, $meals)) {
    echo "The amount of Burger is: \$0.7";
} */