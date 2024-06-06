<?php
include_once 'add.php';
include_once 'add.php';
// include_once '../add.php';
/* 
    The include_once statement:

    -> A problem may arise when you include many nested PHP scripts because the include
       statement doesn’t check for scripts that have already been included.

    -> This directory may not be where your file is located; your file will go wherever you’ve
       designated a place for it. To avoid this type of error, you should use the include_once
       statement.
*/

/* Example */
echo add(10, 20);
echo "<br>";
// echo hello(20, 20);

echo "<br>";
echo "Hello";