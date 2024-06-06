<?php

/* Date Function: (case sensitive)

    Year:
    2020 => Y, o
    20 => y

    Months:
    01 => m
    1 => n
    January => F
    Jan => M

    Date/Day:
    01-31 => d
    1-31 => j
    Sunday-Saturday => l
    Sun-Sat => D

    1st, 2nd, 3rd .... => S (works better with j)

    Hour:
    01-12 => h (we can use am or pm)
    00-23 => H (we should not use am or pm)

    Minute:
    00-59 => i

    Seconds:
    00-59 => s

    am/pm => a
    AM/PM => A
*/

/* Date format:
    date('format', timestamp);    
*/

$date = date('Y-m-d h:i:s A');
// echo $date;
echo "<br>";

$timezone = date_default_timezone_get();
// echo $timezone;
echo "<br>";

$timezone = date_default_timezone_set('Asia/Kathmandu');
// echo $timezone;

// echo "<br>";

$date = date('Y-m-d h:i:s A');
// echo $date;

echo "<br>";

/* 16th of December, 2022 */
$date = date('jS \of F, Y');
echo $date;