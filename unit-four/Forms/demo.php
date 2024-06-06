<?php

/* Cross side scripting attacks or SQL Injection 
    htmlentities()
    htmlspecialchars()
    strip_tags()
*/

$str = "<b>Shanker Dev Campus<b>";

echo strip_tags($str);