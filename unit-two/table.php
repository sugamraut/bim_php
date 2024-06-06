<?php
/* Not good approach of creating a table in PHP */
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
        <tr>
            <td>1.</td>
            <td><?php echo $person[0]['name']; ?></td>
            <td><?php echo $person[0]['email']; ?></td>
            <td><?php echo $person[0]['address']; ?></td>
            <td><?php echo $person[0]['phone']; ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td><?php echo $person[1]['name']; ?></td>
            <td><?php echo $person[1]['email']; ?></td>
            <td><?php echo $person[1]['address']; ?></td>
            <td><?php echo $person[1]['phone']; ?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td><?php echo $person[2]['name']; ?></td>
            <td><?php echo $person[2]['email']; ?></td>
            <td><?php echo $person[2]['address']; ?></td>
            <td><?php echo $person[2]['phone']; ?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td><?php echo $person[3]['name']; ?></td>
            <td><?php echo $person[3]['email']; ?></td>
            <td><?php echo $person[3]['address']; ?></td>
            <td><?php echo $person[3]['phone']; ?></td>
        </tr>
    </table>
</body>

</html>