<?php
/* 
Some predefined variables in PHP are "superglobals", which means 
that they are always accessible, regardless of scope - and 
you can access them from any function, class or file without 
having to do anything special.

The PHP superglobal variables are:

$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_COOKIE
$_SESSION
------

$_POST is an associative array of variables passed to the current 
script via the HTTP POST method when using
 application/x-www-form-urlencoded or multipart/form-data 
as the HTTP Content-Type in the request. 
You can use when you are sending large data to server or if you 
have sensitive information like passwords,
credit card details etc.

$_GET is an associative array of variables passed to the current 
script via the URL parameters. You can use when there is small amount 
of data, it is mostly used in pagination, page number is shown 
in the url and you can easily get the page number from URL using $_GET.

$_REQUEST is a 'superglobal' or automatic global, variable. 
This simply means that it is available in all scopes throughout 
a script. It is an associative array that by default contains 
the contents of $_GET and $_POST.


*/

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

/* echo "<pre>";
print_r($_REQUEST);
echo "</pre>"; */