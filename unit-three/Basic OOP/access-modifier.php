<?php

/* 
-> Access modifiers in PHP are keywords used to define the accessibility of properties 
   and methods within a class. 

-> There are three main access modifiers in PHP:

    - public: Public properties and methods can be accessed from anywhere - outside 
      the class, within the class itself, and by classes that extend the class 
      in which the public property or method is defined.

    - protected: Protected properties and methods can be accessed within the class 
      itself and by classes that extend the class in which the protected property 
      or method is defined, but not from outside these classes.

    - private: Private properties and methods can only be accessed from within the 
      class in which they are defined. Even classes that extend the parent class 
      cannot access private members of the parent class.
*/

class Person {
    public $name; // Can be accessed from anywhere
    protected $age; // Can be accessed within the class and by subclass
    private $salary; // Can be accessed only within the class

    // Constructor
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // Public method
    public function getDetails() {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }

    // Protected method
    protected function getAge() {
        return $this->age;
    }

    // Private method
    private function getSalary() {
        return $this->salary;
    }
}

class Employee extends Person {
    public function accessProtected() {
        return $this->getAge(); // This works because getAge() is protected and accessible within a subclass
    }

    public function accessPrivate() {
        // return $this->getSalary(); // This will cause an error because getSalary() is private
    }
}

// Creating an instance of Person
$person = new Person("Angel Dimaria", 36, 40000000);

// Accessing public property
echo $person->name . "<br>"; // Outputs: Angel Dimaria

// Accessing public method
echo $person->getDetails() . "<br>"; // Outputs: Name: Angel Dimaria, Age: 36

// Creating an instance of Employee
$employee = new Employee("Cristiano Ronaldo", 39, 1240000000);

// Accessing protected method through a public method in the subclass
echo $employee->accessProtected() . "<br>"; // Outputs: 39

// Attempting to directly access private and protected properties will result in an error

// echo $person->salary; // Uncaught Error: Cannot access private property Person::$salary

// echo $person->age; // Uncaught Error: Cannot access protected property Person::$age
?>
