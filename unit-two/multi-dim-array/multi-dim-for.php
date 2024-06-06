<?php
/* For Loop */
$person = array(
    array(
        'name' => 'User One',
        'email' => 'userone@gmail.com',
        'address' => 'Kathmandu',
        'phone' => '9999999999'
    ),
    array(
        'name' => 'User Two',
        'email' => 'usertwo@gmail.com',
        'address' => 'Lalitpur',
        'phone' => '8888888888'
    ),
    array(
        'name' => 'User Three',
        'email' => 'userthree@gmail.com',
        'address' => 'Bhaktapur',
        'phone' => '7777777777'
    ),
    array(
        'name' => 'User Four',
        'email' => 'userfour@gmail.com',
        'address' => 'Biratnagar',
        'phone' => '5555555555'
    )
);

/* echo "<pre>";
print_r($person);
echo "</pre>"; */

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
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        <?php
        //array last index = size - 1
        $count = count($person); //4
        for ($i = 0; $i < $count; $i++) {
        ?>
        <tr>
            <td><?php echo $i + 1 . "."; ?></td>
            <td><?php echo $person[$i]['name']; ?></td>
            <td><?php echo $person[$i]['email']; ?></td>
            <td><?php echo $person[$i]['address']; ?></td>
            <td><?php echo $person[$i]['phone']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>