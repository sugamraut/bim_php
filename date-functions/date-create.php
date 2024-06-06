<?php

/* 
    date_create():
    -> The date_create() function returns a new DateTime object.
    
    Syntax:
    date_create(time, timezone)

    date_format():
    -> The date_format() function returns a date formatted 
       according to the specified format.

    Syntax:
    date_format(object, format)
    
*/

$date = date_create("2023-01-29 10:30:00");
echo date_format($date, "Y/m/d H:i:s");
