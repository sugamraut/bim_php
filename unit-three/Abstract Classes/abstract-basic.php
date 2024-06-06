<?php

/* 
What Are Abstract Classes?
 -> An abstract class is a special type of class in PHP that cannot be instantiated 
    directly. 

 -> It is designed to be a base class from which other classes can inherit. 

 -> Abstract classes are used to define a template for other classes, specifying 
    methods that must be implemented by its subclasses.

 -> The primary purpose of an abstract class is to define a common interface for 
    its subclasses. 

 -> It can contain both abstract methods (without implementation) and 
    concrete methods (with implementation). 

Note: Abstract methods in an abstract class are declared, but they contain no body. 
      The implementation of these methods must be provided by the child classes that 
      extend the abstract class.

Why Use Abstract Classes?
 -> Code Reusability: Abstract classes allow you to define a template for other 
    classes. You can use it to encapsulate common functionality which can then be 
    shared by all subclasses.

 -> Consistency: By defining abstract methods in an abstract class, you enforce that 
    all subclasses implement these methods, ensuring a consistent interface 
    across different implementations.

 -> Flexibility: Abstract classes provide a flexible architecture for your application. 
    You can define a base set of functionalities and let subclasses provide the 
    specific implementations.
*/

abstract class Vehicle {
    // Abstract method
    abstract protected function startEngine();

    // Concrete method
    public function stopEngine() {
        echo "Engine stopped.";
    }
}

class Car extends Vehicle {
    public function startEngine() {
        echo "Engine started. <br>";
    }
}

$myCar = new Car();
$myCar->startEngine(); // Outputs: Engine started.
$myCar->stopEngine();  // Outputs: Engine stopped.

