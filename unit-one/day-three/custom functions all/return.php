<?php
/* 
    -> A return statement can be any data type including arrays and 
    objects.
    
    -> Syntax:
        
        //Allowed
        return (10); 
        return ($a + $b);
        return ($p);
        return [$a, $b];

        //Not allowed because a function cannot return multiple values 
        return (2,4);
        return ($a, $b);
*/


//Example: One
/* function add($a, $b)
{
    return ($a + $b);
}
echo add(10, 50); */

//Example: Two (Returning array)
/* function data($a, $b)
{
    return [$a, $b];
}

echo "<pre>";
print_r(data('Nepal', 44600));
echo "</pre>"; */

// var_dump(data('Nepal', 44600));