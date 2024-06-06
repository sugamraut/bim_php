<?php

/* mktime():
   -> Get Unix timestamp for a date
  
   Syntax:
   mktime(hours, minutes, seconds, month, day, year)

*/

date_default_timezone_set('Asia/Kathmandu');

// echo "Time & Date : " . date('d-m-Y h:i:s a') . "<br><br>";

echo date('m-d-Y h:i:s a', mktime(10, 20, 10, 10, 20, 2003));
