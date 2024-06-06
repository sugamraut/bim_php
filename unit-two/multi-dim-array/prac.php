<?php
/* Example Looping with foreach( ) */

/* foreach Loop */
$person = array(
    'a' => array(
        'name' => 'User One',
        'email' => 'userone@gmail.com',
        'address' => 'Kathmandu',
        'phone' => '9999999999'
    ),
    'b' => array(
        'name' => 'User Two',
        'email' => 'usertwo@gmail.com',
        'address' => 'Lalitpur',
        'phone' => '8888888888'
    ),

    'c' => array(
        'name' => 'User Three',
        'email' => 'userthree@gmail.com',
        'address' => 'Bhaktapur',
        'phone' => '7777777777'
    ),

    'one' => array(
        'name' => 'User Four',
        'email' => 'userfour@gmail.com',
        'address' => 'Biratnagar',
        'phone' => '5555555555'
    )
);

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
        //array last_index = size-1
        $count = count($person);
        $keys = array_keys($person);

        for ($i = 0; $i < $count; $i++) {
        ?>
        <tr>
            <td><?php echo $i + 1 . "."; ?></td>
            <td><?php echo $person[$keys[$i]]['name']; ?></td>
            <td><?php echo $person[$keys[$i]]['email']; ?></td>
            <td><?php echo $person[$keys[$i]]['address']; ?></td>
            <td><?php echo $person[$keys[$i]]['phone']; ?></td>
        </tr>
        <?php
        }
        ?>



</body>

</html>