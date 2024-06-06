<?php

/* 
Some predefined variables in PHP are "superglobals", which means 
that they are always accessible, regardless of scope - and 
you can access them from any function, class or file without 
having to do anything special.

The PHP superglobal variables are:

-> $GLOBALS
-> $_SERVER
-> $_GET
-> $_POST
-> $_FILES
-> $_COOKIE
-> $_SESSION
-> $_REQUEST

*/

/* $GLOBALS - This is an associative array that references all variables available in the global scope of a script. It's useful for accessing global variables from within functions or methods where the global scope is not automatically available. */

/* $GLOBALS Example */
$x = 10; 
$y = 15;

function sum() {
    return $GLOBALS['x'] + $GLOBALS['y'];
}

// echo sum(); // Outputs 25

/* $_SERVER - this array contains information created by the web server such as paths, headers, and script locations. It's often used to retrieve environment information, like the user's IP address, the web server software, and the page's URL. */

/* $_SERVER Example */

// echo $_SERVER['HTTP_HOST']; // Outputs the host name
// echo $_SERVER['REQUEST_URI']; // Outputs the URI of the current page
// echo $_SERVER['REMOTE_ADDR']; // Outputs the IP address of the user

/* $_GET - An associative array of variables passed to the script via URL parameters (query string). This is commonly used to retrieve data sent from forms using the GET method or from direct URL parameters. */

/* $_GET Example - If your URL is test.php?name=John&age=30, you can access the values using:
*/
// echo $_GET['name']; // Outputs John
// echo $_GET['age']; // Outputs 30

/* $_POST - $_POST is an associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request. You can use when you are sending large data to server or if you have sensitive information like passwords, credit card details etc. */

/* $_POST Example - For a form with a method="post" containing a name input:  */

// echo $_POST['name']; // Outputs the name entered in the form

/* $_REQUEST - is a 'superglobal' or automatic global, variable. 
This simply means that it is available in all scopes throughout 
a script. It is an associative array that by default contains 
the contents of $_GET, $_POST, $_COOKIE. */

/* $_REQUEST Example: For a name field sent via POST or GET: */

// echo $_REQUEST['username']; // Outputs the value of the name parameter

/* $_FILES - An array of items uploaded via an HTTP POST request. It provides information about uploaded files, like their names, types, and temporary storage paths.
*/

/* $_FILES Example: For a file input named userfile, you can access its details using: */

// echo $_FILES['userfile']['name']; // Original name of the file
// echo $_FILES['userfile']['tmp_name']; // Temporary server storage path

/* $_COOKIE - Contains HTTP cookies that are sent from the client to the server. It's used to retrieve data stored in cookies, which are often used for persistent user identification. */

/* $_COOKIE Example: If a cookie named campus is set: */

// setcookie('campus', 'shanker dev campus', time() + 20, "/");

// echo $_COOKIE['campus']; // Outputs the value of the user_preference cookie

/* $_SESSION - This array stores session variables. Sessions are a way to store data for individual users against a unique session ID, which can be used for persisting user state across page requests. */

/* $_SESSION Example: After starting a session and setting a variable: */

/* session_start();

$_SESSION['username'] = 'JohnDoe';
echo $_SESSION['username']; // Outputs JohnDoe */





