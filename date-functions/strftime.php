<?php

/* 
   Strftime():
   -> Format a local time/date according to locale settings.
   
   Syntax:
   strftime(format, timestamp);
   
   Warning:
   This function has been DEPRECATED as of PHP 8.1.0. Relying on 
   this function is highly discouraged.

   Formats:
   %a - abbreviated weekday name
   %A - full weekday name
   %b - abbreviated month name
   %B - full month name
   %c - preferred date and time representation
   %C - century number (the year divided by 100, range 00 to 99)
   %d - day of the month (01 to 31)
   %D - same as %m/%d/%y
   %e - day of the month (1 to 31)
   %g - like %G, but without century
   %G - 4-digit year corresponding to the ISO week number (see %V)
   %h - same as %b
   %H - hour, using a 24-hour clock (00 to 23)
   %I - hour, using a 12-hour clock (01 to 12)
   %j - day of the year (001 to 366)
   %m - month (01 to 12)
   %M - minute
   %n - newline character
   %p - either am or pm according to the given time value
   %r - time in a.m. and p.m. notation
   %R - time in 24 hour notation
   %S - second
   %t - tab character
   %T - current time, equal to %H:%M:%S
   %u - weekday as a number (1 to 7), Monday = 1 Sunday = 7
   
   %U - week number of the current year, starting with the 
        first Sunday as the first day of the first week
   
        %V - The ISO 8601 week number of the current year (01 to 53),
        where week 1 is the first week that has at least 4 days
        in the current year, and with Monday as the first day
        of the week
   
   %W - week number of the current year, starting with the first
        Monday as the first day of the first week
   
   %w - day of the week as a decimal, Sunday = 0
   %x - preferred date representation without the time
   %X - preferred time representation without the date
   %y - year without a century (range 00 to 99)
   %Y - year including the century
   %Z or %z - time zone or name or abbreviation
   
   Miscellaneous:
   %n - 	A newline character ("\n")
   %t - A Tab character ("\t")
   %% - A literal percentage character ("%")	
*/
date_default_timezone_set('Asia/Kathmandu');

// echo strftime("%B %d %Y, %X %Z");

echo "<br><br>";

// echo strftime("%B %d %Y, %X %Z", mktime(22, 10, 0, 07, 10, 2001));

echo "<br><br>";

// echo strftime("%d-%m-%Y %H:%M:%S");

echo "<br><br>";

/* 
Example: To display last day of a month

The last day of any given month can be expressed as the "0" day of 
the next month, not the -1 day. 

Both of the following examples will produce the string 
"The last day in Feb 2000 is: 29".

*/
$lastday = mktime(0, 0, 0, 3, 0, 2000);
// echo strftime("Last day in Feb 2000 is: %d", $lastday);

echo "<br><br>";

$lastday = mktime(0, 0, 0, 4, -31, 2000);
// echo strftime("Last day in Feb 2000 is: %d", $lastday);