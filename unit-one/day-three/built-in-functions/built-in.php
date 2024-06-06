<?php
include 'templating-functions/add.php';

// phpinfo();

/* Encryption method */

$pass = "Avinash" . "kistcollege";
$signature = md5($pass);
// echo $signature;

if ($signature == '3f1397038ce2973178da9a6c8ba606a8') {
    echo "Your password is correct.";
} else {
    echo "Your password is incorrect.";
}

/* Testing a function */

/* $test = function_exists("add");

if ($test == true) {
    echo "Function exists.";
} else {
    echo "Function does not exists.";
} */