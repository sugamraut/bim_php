<?php

/* 
   A string literal can be specificed in four different ways:
        -> Single Quote 
        -> Double quote
        -> Heredoc
        -> Nowdoc (not in syllabus)
*/

/* 

-> Heredoc provide useful alternatives to define strings in PHP to the more widely
used quoted string syntax. They are especially useful when we need to define a string that spans
multiple lines (new lines are also interpreted when used in quoted strings) and where use of whitespace
is important.

-> A heredoc is a way to define a multiline string, while maintaining 
the original indentation & formatting. You can use a Heredoc to 
embed snippets of SQL, HTML, or even XML code.

-> Heredoc text behaves just like a double-quoted string, without the 
double quotes. This means that quotes in a heredoc do not need to 
be escaped.

*/
$num = 1000;

$data = <<<MYFILE
        This is $num our second class in <b>PHP</b> 
        <br>
        "The double quote is also acceptable in heredoc" 
        <br>
        'helloworld'
        <br>
        "As discussed in class try to copy and paste b.html table code here inside heredoc and see the result"      
MYFILE; 

echo $data;