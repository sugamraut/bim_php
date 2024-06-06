<?php

/* 
-> Object oriented programming language is programming approach that is based on the 
   concept of real-world objects. 
-> It provides the high maintainability and readability. 
-> It provides the features such as polymorphism, inheritance, abstraction and encapsulation.  
-> PHP introduced object-oriented programming features since version 5.0. 

OOP Terminologies:
 -> Object-Oriented Programming (OOP) is a programming model organized around 
    objects rather than "actions" and data rather than logic. 
    
 -> Here are key terminologies:

    - Class: A blueprint for creating objects. It contains the specification of 
      properties(attributes) and behavior of an object. Whatever the property and 
      behavior has been mentioned in the class will be possessed by an object 
      belonging to that respective class.

    - Object: 
        1. An instance of a class. Each object can have unique values for 
           its attributes and share methods defined in the class.
        2. PHP objects are conceptually similar to real-world objects because 
           they consist of state and behavior.
        3. An object holds its state in variables that are often referred to as properties. 
        4. An object also exposes its behavior via functions which are known as methods.

    - Property: Attributes of a class that hold data specific to an object.

    - Method: Functions defined in a class that describe the behaviors of an object.

    - Inheritance: Inheritance is a fundamental concept in object-oriented programming 
      (OOP) that allows a class to inherit properties and methods from another class. 
      The class from which properties and methods are inherited is called the parent 
      class, superclass, or base class. The class that inherits those properties and 
      methods is called the child class, subclass, or derived class.

    - Encapsulation: Encapsulation is a core principle of object-oriented programming 
      (OOP) that involves bundling the data (attributes) and the methods (behaviors) 
      that operate on the data into a single unit, or class. It also controls the 
      access to that data, making some attributes or methods private or protected, 
      and thus not accessible from outside the class. 

    - Polymorphism: polymorphism is closely related to inheritance.Polymorphism 
      allows objects of different classes to respond differently based on the 
      same message. To implement polymorphism in PHP, you can use either abstract 
      classes or interfaces. Polymorphism helps you create a generic framework 
      that takes the different object types that share the same interface.

    - Abstraction: The concept of hiding the complex reality while exposing only 
      the necessary parts. Abstraction is about hiding complexity by focusing on 
      what an operation or object does, not on how it achieves what it does. 
      It focuses on the interface.

    What is $this in PHP?
    -> In PHP, $this keyword references the current object of the class. 
    -> The $this keyword allows you to access the properties and methods of the 
       current object within the class using the object operator (->):
       - $this->property
       - $this->method()
*/