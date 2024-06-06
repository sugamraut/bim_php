<?php

/* levels of errors:

        a) Warning: 
                -> The operation performed on the variables are executed.
                -> It returns the warning information.
                -> Line's of code are also executed after the warning error.
                
        b) Fatal Error: 
                -> The operation performed on the variables are not executed. 
                -> Line's of code are not executed after the fatal error.
        
        c) Parse Error: 
                -> No line's of code will be executed before and after the error.
                -> It returns the syntax error. 
                -> For example, a syntax error can be a forgotten quotation mark, 
                   a missing semicolon at the end of a line, missing parenthesis, 
                   or extra characters.
 */

// echo "<br>";

echo "hello";

$a = 10;
// $b = "10asdaas"; //returns warning error 
// $b = "asasa10"; // returns Fatal error or error


$c = $a + $b;

echo $c;

echo "<br>";

echo "abc";