<?php
$person = array(
    'User One',
    'userone@gmail.com',
    'Kathmandu',
    '9999999999'
);

$i = 0;
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
            <td><?php echo $i + 1 . "."; ?></td>
            <?php
            $count = count($person);
            for ($i = 0; $i < $count; $i++) {
            ?>
            <td><?php echo $person[$i]; ?></td>
            <?php
            }
            ?>
        </tr>
    </table>
</body>

</html>