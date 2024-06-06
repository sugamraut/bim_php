<?php

/* 
  strtotime():
  -> Parse about any English textual datetime description 
     into a Unix timestamp.

  -> The function returns the time in seconds since 
     the Unix Epoch i.e., since January 1 1970 00:00:00 GMT

  Syntax:
  strtotime(time, now);
  -> Required. Specifies a date/time string
  -> Optional. Specifies the timestamp used as a base for the 
     calculation of relative dates


*/

echo strtotime("now") .  "<br>";
echo strtotime("10 September 2000") .  "<br>";
echo strtotime("+1 day") .  "<br>";
echo strtotime("+1 week") .  "<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds") .  "<br>";
echo strtotime("next Thursday") .  "<br>";
echo strtotime("last Monday") .  "<br>";
