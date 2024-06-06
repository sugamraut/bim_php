<?php
/* 
What are Interfaces?
 -> Interfaces in PHP are a way to ensure that certain classes implement specific 
    methods.

 -> They are similar to abstract classes in that they provide a template for class 
    functionalities. 

 -> However, while abstract classes can contain both abstract and concrete methods 
    (with implementations), interfaces can only contain method signatures 
    (declarations without any implementation). 

 -> This enforces a contract on the classes that implement the interface, 
    requiring them to provide implementations for all declared methods.

Key Characteristics of Interfaces:

 -> Method Signatures Only: Interfaces can declare methods but not implement them. 
    Every class that implements the interface must provide an implementation for each 
    method declared by the interface.

 -> No Properties: Interfaces cannot declare properties. They are strictly for 
    defining method signatures.

 -> Multiple Implementations: A single class can implement multiple interfaces, 
    allowing for more flexible design patterns than single inheritance 
    (as a class can only extend one abstract class but can implement many interfaces).

 -> Public Methods: All methods declared in an interface are implicitly public, 
    and they must be public when implemented by a class.

Purpose of Using Interfaces:
 -> Enforcing a Contract: Interfaces ensure that certain methods are implemented in 
    classes, promoting a consistent API across different implementations.
   
 -> Decoupling Code: They allow for the decoupling of the specific implementations 
    of methods from their declaration, making it easier to interchange parts of the 
    system without affecting others.

 -> Multiple Inheritance: Through interfaces, PHP classes can implement multiple 
    interfaces, helping to overcome the limitation of single inheritance in PHP 
    (since a class can only extend from one other class).

*/

interface parent1{

   function calc($a, $b);

}

interface parent2{
   function sub($c, $d);
}

class childClass implements parent1, parent2{
   public function calc($a, $b){
       echo $a + $b;
   }

   public function sub($c, $d){
       echo $c - $d;
   }
}

$test = new childClass();
$test->calc(10, 20);
echo "<br>";
$test->sub(100, 50);