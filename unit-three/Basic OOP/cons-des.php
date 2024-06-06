<?php

/* 
    Constructors:
    -> A constructor is a special type of method in a class that is automatically 
       called when an object of the class is created. 
    -> It is commonly used to initialize class properties or perform startup 
       tasks necessary for the class. 
    -> In PHP, a constructor is defined using the __construct() method.

    Important Points:
    -> Constructors can accept parameters, allowing you to pass values to the object 
       when it is instantiated.
    -> If a class extends another class, the parent class's constructor does not get 
       called automatically. 
    -> You must explicitly call it using parent::__construct() if the parent class 
       defines a constructor.

    Destructors:
    -> A destructor is another special type of method that is automatically called 
       when an object is no longer in use or the script ends. 
    -> It is defined using the __destruct() method. 
    -> Destructors are useful for performing cleanup tasks, such as closing file 
       handles, releasing memory, or other resource de-allocation tasks before the 
       object is destroyed.
*/


class Book
{
    public $title;
    public $author;

    // Constructor
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
        echo "Constructor called: Book '{$this->title}' by {$this->author} created. <br><br>";
    }

    // Method to display book info
    public function displayInfo()
    {
        echo "Book: {$this->title} <br> Author: {$this->author} <br><br>";
    }

    // Destructor
    public function __destruct()
    {
        echo "Destructor called: Book '{$this->title}' by {$this->author} is being destroyed. <br><br>";
    }
}

// Creating an object of the Book class
$book = new Book("The Great Gatsby", "F. Scott Fitzgerald");

// Display book information
$book->displayInfo();

// At the end of the script, the destructor is automatically called
