<?php

/* Difference between echo and print in PHP */

$res = print "hello ";
echo $res; // print has return type one whereas echo has no return value.

echo "<br>";

echo "hello", "world"; //multiple expressions can be used in echo
// print "world", "hello"; //multiple expressions cannot be used in print

?>
