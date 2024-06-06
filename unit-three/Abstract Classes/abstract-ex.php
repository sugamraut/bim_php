<?php

abstract class LibraryAccount {
    protected $accountId;
    protected $holderName;

    public function __construct($accountId, $holderName) {
        $this->accountId = $accountId;
        $this->holderName = $holderName;
    }

    // Abstract method to calculate due date for borrowed items
    abstract protected function calculateDueDate();

    // Common method to check out a book
    public function checkOutBook() {
        $dueDate = $this->calculateDueDate();
        echo "{$this->holderName} checked out a book. Due date: {$dueDate}. <br><br>";
    }

    // Common method to return a book
    public function returnBook() {
        echo "{$this->holderName} returned a book. <br><br>";
    }
}

class StudentLibraryAccount extends LibraryAccount {
    protected function calculateDueDate() {
        // Assuming students have to return books within 14 days
        return date('Y-m-d', strtotime('+14 days'));
    }
}

//concrete class: a concrete class is a class that has implemented all of its inherited abstract methods and can therefore be instantiated.

class FacultyLibraryAccount extends LibraryAccount {
    protected function calculateDueDate() {
        // Assuming faculty members have to return books within 30 days
        return date('Y-m-d', strtotime('+30 days'));
    }
}

$studentAccount = new StudentLibraryAccount(1, 'Ram Nepal');
$studentAccount->checkOutBook();
// Output: Ram Nepal checked out a book. Due date: [due date in 14 days].

$facultyAccount = new FacultyLibraryAccount(2, 'Sita Adhikari');
$facultyAccount->checkOutBook();
// Output: Sita Adhikari checked out a book. Due date: [due date in 30 days].

