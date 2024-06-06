<?php

/* Q . Write a PHP program to print the following table 
   (Use array to store data)
    
    -----------------------------------
    | Roll No  |    Name     | Gender |
    -----------------------------------
    |     1.   | Ram Thapa   |    M   |
    |     2.   | Aruna Thapa |    F   |
    -----------------------------------
*/

$person = array(
    'one' => array(
        'name' => "Ram Thapa",
        'gender' => "M"
    ),
    'two' => array(
        'name' => "Aruna Thapa",
        'gender' => "F"
    ),
    'three' => array(
        'name' => "Ayush Thapa",
        'gender' => "M"
    )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <th>Roll No.</th>
            <th>Name</th>
            <th>Gender</th>
        </tr>
        <?php
        $i = 1;
        foreach ($person as $key => $user) {
        ?>
        <tr>
            <td align="center"><?php echo $i++ . "."; ?></td>
            <td align="center"><?php echo $user['name']; ?></td>
            <td align="center"><?php echo $user['gender']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>