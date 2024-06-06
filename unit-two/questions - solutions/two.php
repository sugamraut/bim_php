<?php

/* Q. Write a PHP program to print the following List in an array 
      and display as follows:
    
    a. Bachelor in Information Management.
    b. Bachelor in Business Administration.
    c. Bachelor in Business Studies.
    
*/

$faculties = array(
    'Bachelor in Information Management',
    'Bachelor in Business Administration',
    'Bachelor in Business Studies'
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <ol type="a">
        <?php
        foreach ($faculties as $key => $value) {
        ?>
        <li><?php echo $value; ?></li>
        <?php
        }
        ?>
    </ol>
</body>

</html>