<?php

$persons = array(
    0 => array(
        'name' => 'Anuradha Koirala',
        'age' => 71,
        'gender' => 'Female'
    ),

    1 =>  array(
        'name' => 'Kulman Ghising',
        'age' => 49,
        'gender' => 'Male'
    ),
    array(
        'name' => 'Mahabir Pun',
        'age' => 65,
        'gender' => 'Male'
    ),
    array(
        'name' => 'Sanduk Ruit',
        'age' => 66,
        'gender' => 'Male'
    )

);

$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        <?php
        foreach ($persons as $key => $value) {
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['gender']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>