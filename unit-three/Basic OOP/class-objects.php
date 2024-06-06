<?php


// Define a class named 'calculation'
class calculation
{
    // Declare three properties of the class
    var $a, $b, $c; // Note: 'var' is an older way of declaring public properties in PHP

    // Define a method named 'mul' to multiply three properties
    function mul()
    {
        // Return the product of the three properties
        return ($this->a * $this->b * $this->c);
    }
}

// Create an instance (object) of the 'calculation' class
$calObj = new calculation();

// Set the values of properties 'a', 'b', and 'c' for the object
$calObj->a = 10; // Set property 'a' to 10
$calObj->b = 20; // Set property 'b' to 20
$calObj->c = 30; // Set property 'c' to 30

// Call the 'mul' method on the object to multiply the values of 'a', 'b', and 'c'
// and echo (print) the result
echo "The product is: " . $calObj->mul(); // Outputs: 6000
