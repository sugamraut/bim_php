<?php

/* 
-> HTTP Authentication is a method used by web servers to challenge a client 
(typically a web browser) to provide credentials before granting access to a resource.

-> It's a built-in feature of the HTTP protocol that doesn't require session handling 
or cookies, making it a straightforward way to protect web resources. 

-> There are primarily two types of HTTP Authentication:
    - Basic Authentication: 
      Basic Authentication is the simplest form. When a user attempts to access a 
      protected resource, the server responds with a 401 Unauthorized status and 
      a WWW-Authenticate header indicating that Basic Authentication is required. 
      The browser then prompts the user for a username and password. 
    
    - Digest Authentication:
      Digest Authentication is more secure than Basic Authentication. It addresses 
      the main weakness of Basic Authentication by avoiding the need to send passwords 
      over the network in clear text. Instead, it uses a challenge-response mechanism 
      that ensures that the password does not need to be transmitted in clear text. 
      This is done by using an MD5 hash of the username, password, given nonce value, 
      HTTP method, and the requested URI.
      

*/

/* Example of Basic Authentication */

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Protected Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to display if the user presses Cancel';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
