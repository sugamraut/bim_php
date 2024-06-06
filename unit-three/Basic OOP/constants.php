<?php

/* 
-> Class constants in PHP provide a way to define values that remain unchanged within 
   the context of a class. 
-> These constants are accessible regardless of class instantiation, meaning you 
   don't need to create an object of the class to access them. 
-> Class constants are useful for values that are closely related to a class and 
   do not change, such as configuration values, status codes, or fixed data values relevant to the class's functionality.

-> Defining Class Constants:
   - Class constants are defined using the const keyword inside a class. 
   - Once defined, these constants can't be changed. 
   - The naming convention for constants is uppercase letters with underscores to 
     separate words, but this is not enforced by PHP—it's just a common practice 
     for better readability.

-> Accessing Class Constants:
   - To access a class constant outside the class, you use the class name 
     followed by the scope resolution operator (::) and then the constant name. 

   - Inside the class, you can access constants using self:: keyword followed by 
     the constant name.
*/

class Circle
{
    // Define a class constant for Pi
    const PI = 3.14159;

    public function circleArea($radius)
    {
        return self::PI * ($radius ** 2); // Access the constant inside the class
    }
}

// Accessing class constant outside of the class
echo "The value of PI is: " . Circle::PI . "<br>";

// Creating an instance of Circle
$circle = new Circle();

// Using the instance to call a method that uses the class constant
echo "Area of the circle with radius 4 is: " . $circle->circleArea(4);
