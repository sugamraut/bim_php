<?php

/* 
    Here's a basic example to illustrate PHP inheritance, including the use of public,
    protected, and private access modifiers, and how they affect accessibility in 
    inheritance.
*/

class Animal {
    public $name;
    protected $sound;
    private $foodType;

    public function __construct($name, $sound, $foodType) {
        $this->name = $name;
        $this->sound = $sound;
        $this->foodType = $foodType;
    }

    public function makeSound() {
        return $this->name . " says " . $this->sound;
    }

    protected function getFoodType() {
        return $this->foodType;
    }
}

class Dog extends Animal {
    public $breed;

    public function __construct($name, $sound, $foodType, $breed) {
        parent::__construct($name, $sound, $foodType); // Call the parent constructor
        $this->breed = $breed;
    }

    public function getBreed() {
        return $this->breed;
    }

    public function getDiet() {
        // This will work because getFoodType() is protected, and we're accessing it within a derived class
        return $this->name . " eats " . $this->getFoodType();
    }
}

$dog = new Dog("Rex", "Woof", "Meat", "German Shepherd");

echo $dog->makeSound() . "<br>"; // Accessing public method from the parent class
echo $dog->getBreed() . "<br>"; // Accessing child's own public method
echo $dog->getDiet() . "<br>"; // Accessing parent's protected method through child's public method

// Directly accessing protected or private properties will result in an error
// echo $dog->sound; // Error: Cannot access protected property
// echo $dog->foodType; // Error: Cannot access private property
