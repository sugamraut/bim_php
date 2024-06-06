<?php

/* 
    a) Changing Case: 
        -> strtolower()
        -> strtoupper()

    b) Prettifying Name:
        -> ucwords()
        -> ucfirst()
        -> lcfirst()

    c) Substring: 
        -> Truncating With substr()
        -> Extracting the end of string substr()
        -> Using str_replace()

  */


/* Try on your own for Changing case and Prettifying Name as it has already been discussed in class */

// Syntax: substr(string, start/offset, length)

// $str = "Floccinaucinihilipilification";

// $str = "Hello";

// echo substr($str, 0, 4);

// $rest = substr("abcdef", -1);    // returns "f"
// $rest = substr("abcdef", -2);    // returns "ef"
// $rest = substr("abcdef", -3, 1); // returns "d"

// echo $rest;

/* string replace method */

// Syntax: str_replace(search/needle, replace, /string/haystack, count)

/* $str = "Thames Campus";
echo str_replace("Thames", "SDC", $str, $i);
echo "<br>";
echo  "The number of replacement is: $i"; */

$sentence = "We live in an age where unnecessary things are only our necessities.";

$search = array("age", "unnecessary", "necessities");
$replace = array("era", "necessary", "unnecessities");

$newSentence = str_replace($search, $replace, $sentence, $count);
echo $newSentence;
echo "<br>";
echo "The number of replacements is: $count";
