<?php

/* Examples of scalar collision */

/* $var = 1; //sacalar variable

$var['name'] = 'John'; //not scalar varriable

echo $var['name']; */



/*  The PHP strings internally functions as byte arrays , thus using array brackets to access or modify a string is not multi-byte safe. 
This operation should be reserved for single-byte encoded strings like ISO-8859-1.  */

$str = "xy";
$str[0] = "bc";
echo $str;