<?php
/* Important Elements in $_SERVER / Useful Server Variables

a. $_SERVER['PHP_SELF']:
    The filename of the currently executing script, relative to the
    document root.

b. $_SERVER['GATEWAY_INTERFACE']:
    What revision of the CGI specification the server is using,
    i.e., 'CGI/1.1'.
    
c. $_SERVER['SERVER_NAME']:
    The name of the sever host under which the current script
    is executing.

d. $_SERVER['SERVER_PROTOCOL']:
    Name of the information protocol via which the page was
    requested, i.e., 'HTTP/1.0'.

e. $_SERVER['SERVER_ADDR']:
    The IP address of the server under which the current script
    is executing.
    
f. $_SERVER['REQUEST_METHOD']:
    Which request method was used to access the page, i.e., 
    'GET', 'POST' etc.

g. $_SERVER['QUERY_STRING']:
    The query string, if any, via which the page was accessed.

h. $_SERVER['DOCUMENT_ROOT']:
    Root directory of current script as defined the server's
    configuration file. 
    
*/