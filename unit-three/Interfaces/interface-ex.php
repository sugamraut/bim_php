<?php

interface PaymentGateway{
    public function processPayment($amount);
    public function refundPayment($trasactionId);
}

class PayPalPayment implements PaymentGateway{
    
    public function processPayment($amount){
        echo "Processing a payment of $amount via PayPal. <br>";
    }

    public function refundPayment($transactionId){
        echo "Refunding payment with transaction Id $transactionId via PayPal.";
    }
}

$test = new PayPalPayment();
$test->processPayment(100);
$test->refundPayment(100);

/* 
PHP - Interfaces vs. Abstract Classes:

 -> Interface are similar to abstract classes. The difference between interfaces and 
    abstract classes are:

    - Interfaces cannot have properties, while abstract classes can.

    - All interface methods must be public, while abstract class methods is public, 
      protected or private.

      Note: 
       - It is true that private methods in an abstract class 
         cannot be directly used by subclasses, an abstract class 
         can still have private methods. 
       
       - These private methods are intended for use within the abstract 
         class itself or by non-abstract methods within the 
         same abstract class.

    - All methods in an interface are abstract, so they cannot be implemented in 
      code and the abstract keyword is not necessary.
      
    - Classes can implement an interface while inheriting from another class at the 
      same time.

    Reasons to use private methods in abstract classes:
      - Helper functions: Implement internal logic shared by concrete 
        methods without exposing them externally.

      - Encapsulation: Encapsulate implementation details specific 
        to the abstract class, promoting better code organization 
        and maintainability.
*/