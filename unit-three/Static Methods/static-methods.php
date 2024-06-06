<?php

/* 
 -> Static methods in PHP are functions defined within a class that can be called 
    without creating an instance of the class.

 -> A class can have both static and non-static methods.

 -> They are marked with the static keyword. Static methods are often used to 
    implement functionality that is relevant to a class as a whole rather than to 
    any specific instance of the class.

Characteristics of Static Methods:

 - Class Scope: Static methods are associated with the class itself, not 
   with any object instance of the class. You access them using the class name 
   rather than an object instance.

 - No $this Keyword: Within a static method, you cannot use the $this keyword 
   because $this refers to the current object instance, and static methods are 
   not called on an object instance.

 - Utility Functions: They are often used for utility or helper functions that 
   perform tasks not dependent on object properties.

Defining and Calling Static Methods
 - You define a static method using the static keyword before the function name. 
 
  - To call a static method, you use the class name followed by the scope 
    resolution operator (::), then the method name.

*/

class MathOperations {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }
}

$result1 = MathOperations::add(5, 3); // 8
$result2 = MathOperations::subtract(10, 4); // 6

echo "Addition Result: $result1 <br>";
echo "Subtraction Result: $result2";
