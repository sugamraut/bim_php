<?php
include 'demo.php';
include 'add.php';

/* The include statement:

-> The include statement allows you to include and attach other PHP scripts to your
own script. You can think of it as simply taking the included file and inserting it into
your PHP file. 

-> Note: You can name your include files anything you like, but you should always use the .php extension 
because if you name them something else, such as .inc, it’s possible that a user can request the
.inc file and the web server will return the code stored in it. This is a security risk, as it may 
reveal passwords or details about how your program works that can reveal weaknesses in your code. 
This is because the PHP interpreter parses only files marked clearly as PHP.

*/
 
/* Example */
echo "<br>";
echo add(10, 20);

echo "<br>";
echo "<br>";
echo "HELLO";