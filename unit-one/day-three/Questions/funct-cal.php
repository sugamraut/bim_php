<?php

/* 
Q. Create a function called 'calculate' which calculates area, 
   perimeter & volume of a rectangle. Make your own assumptions 
   for the parameters. So, while calling the function as 
   calculate(10,20, 'area') it should return an output as 
   “The area of a rectangle is: 200” and so on for the rest.  
      
*/
function calculate($l, $b, $act = "area", $h = 0)
{
    if ($act == "area") {
        echo "The area of rectangle is: "  . ($l * $b);
    } else if ($act == "perimeter") {
        echo "The perimeter of rectangle is: "  . (2 * ($l + $b));
    } else if ($act == "volume" && $h != 0) {
        echo "The volume of rectangle is: " . ($l * $b * $h);
    } else {
        echo "Your credentials did not match.";
    }
}
calculate(10, 20, 'area');