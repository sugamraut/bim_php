<?php

/* 

Q. Write a function that accepts string as an argument and convert 
it to uppercase leaving the first letter as small. 

*/

function capitalize($str)
{
    $str = strtoupper($str);
    $str[0] = strtolower($str[0]);
    echo $str;
}

capitalize('hello World');