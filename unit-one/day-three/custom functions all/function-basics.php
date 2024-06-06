<?php
/*  Q. Basics of why we use functions in our code ?

    -> When you're writing computer programs, laziness is a virtue.

    -> Functions let you eliminate repeating the same line of code over and 
    over in your programs.

    -> Moreover, functions are key to code reuse. This saves time and prevent errors.

    -> Reusing code you've already written make it easier to do as little 
    work as possible.

    -> Basically functions are of two types:
            a. Custom Functions
            b. Built-in Functions

    -> There are hundreds of built-in functions in PHP. Plus, functions make it easier to use code
       that other people have written. For example, print_r() is a function that prints readable 
       information about a variable in plain English rather than code. Other examples are strtolower(),
       is_array(), isset(), md5() etc. 

    -> Functions work by assigning a name called a function name to a chunk of code. 
    Then you execute the code by calling that name.

*/

/* Declaring and Calling Functions */

//Declaring a function

/* function hi()
{
    echo "Hello everyone.";
}

//calling or invoking a function
hi(); */

/* Passing arguments to functions */

//One argument

/* function oddEven($num)
{
    if ($num % 2 == 0) {
        echo "Entered number is even.";
    } else {
        echo "Entered number is odd.";
    }
}

oddEven(0); */

//Two argument's

/* function addNum($a, $b)
{
    $c = $a + $b;
    return $c;
}

$x = 10;
$y = 20;
$z = 30;

$res = addNum($x, $y);
echo $res; */


/* Specifying a default value/argument or optional argument */
/* 
function mulNum($a, $b = 1)
{
    $c = $a * $b;
    return $c;
}

$x = 10;
$y = 20;
$z = 30;

$res = mulNum($x);
echo $res; */


/* function debug($data, $is_exit = false)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    if ($is_exit) {
        exit;
    }
}
$array = array(
    'name',
    'address'
);

debug($array, true);

echo "<b>Hello</b>"; */






/* Understanding Variable Scope  */
function demo()
{
    $a = 10;
    echo $a;
}

// demo();
// echo $a;