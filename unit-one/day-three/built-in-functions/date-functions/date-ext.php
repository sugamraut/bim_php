<?php

$timezone = date_default_timezone_set('Asia/Kathmandu');

$date = date('Y-m-d h:i:s a');

echo $date . "<br>";

$date = $date . " +7 years +7 months +7 weeks +7 hours +7 minutes";
echo $date . "<br>";

$timestamp = strtotime($date); //timestamp works on the basis of base date (1970 january 1, 00:00:00)
// echo $timestamp . "<br>";

$date = date('Y-m-d h:i:s A', $timestamp);
echo $date . "<br>";








/* Q. 8th of December, 2022 */

// echo date('jS \of F, Y');