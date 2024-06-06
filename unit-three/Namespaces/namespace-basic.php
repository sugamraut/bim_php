<?php
/* 
-> PHP's Object-Oriented Programming (OOP) approach provides a way to structure code 
    in a more modular and reusable manner. 

-> One important feature of PHP OOP is the use of namespaces. Namespaces are a way 
   of encapsulating items such as classes, interfaces, functions, and constants 
   to avoid name conflicts and to organize code more effectively.

-> A namespace is a declarative region that provides a way to group related classes, 
   interfaces, functions, and constants. 
   
-> This is particularly useful in large applications or when integrating with 
   third-party libraries, where the chance of name conflicts is higher.


-> PHP Namespaces
   -> Namespaces are qualifiers that solve two different problems:
       - They allow for better organization by grouping classes that work together 
         to perform a task.
       - They allow the same name to be used for more than one class

    -> For example, you may have a set of classes which describe an HTML table, 
       such as Table, Row and Cell while also having another set of classes 
       to describe furniture, such as Table, Chair and Bed. Namespaces can be used 
       to organize the classes into two different groups while also preventing 
       the two classes Table and Table from being mixed up.
 
-> Syntax: 
    - Declare a namespace called Html:
       namespace Html; 

-> Note: A namespace declaration must be the first thing in the PHP file. 

-> The following code would be invalid:
    echo "Hello World!";
    namespace Html;
*/

/* Example */

namespace first;
class test{
    public function __construct()
    {
        echo "Hello World. <br>";
    }
}

$test = new test();

namespace second;
class test{
    public function __construct()
    {
        echo "Hello World Again.";
    }
}
$test = new test();


