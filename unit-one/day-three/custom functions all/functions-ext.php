<?php
/*  
        Functions are those callabe section of code that you can pass data to and
        that can return data to you. 
        Function are subprograms which can compute a value and performs task.

        It can either return a data or not(only for displaying data).
    */

/* Importance: 
        -> Easy to debug
        -> Reusability
        -> No code repetition
        -> Easy to handle codes
*/

/* Rules
    -> Function name should only start with a letter, underscore '_'
    -> Function name cannot start with a number
    -> Donot use built-in function name or constants eg. echo, print,
         OR __construct(), __destruct, __get() etc. 
    -> Donot use reserve keywords eg. if, else etc.
    -> Functions name are case-insensitive, but strictly function name should be same while calling and 
       declaring.

*/

//Function without parameter
/* function greeting()
{
    return "Namaste";
}

echo greeting(); */

//Function with parameter

/* function greeting($one, $two)
{
    return $one .= " " . $two;
}

echo greeting('Namaste', 'hello'); */