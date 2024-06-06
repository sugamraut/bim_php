<?php
require 'demo.php';
require 'add.php';

/* Require Statement:
    -> To make sure that a file is included and to stop your program if it isn’t, use require and its 
       counterpart, require_once.
    -> These are exactly the same as include and include_once except that they make sure that the 
       file is present; otherwise, the PHP script’s execution is halted, which wouldn’t be a good thing!

    -> You should use require instead of include if the file you’re including defines either 
       critical functions that your script won’t be able to execute, or variable definitions, such as 
       database connection details.
*/

/* Example */
echo add(10, 20);

echo "<br>";
echo "hello";