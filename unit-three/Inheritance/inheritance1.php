<?php

/* 
-> Inheritance in PHP allows a class to inherit properties and methods from another 
   class. 
-> The class that inherits is called the child or derived class, and the class being 
   inherited from is called the parent or base class. 
-> Inheritance promotes code reuse and establishes a relationship between classes 
   through their behaviors and properties.
-> An inherited class is defined by using the extends keyword.
*/

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();