<?php
$faculties = array(
    'Bachelor in Information Management',
    'Bachelor in Business Administration',
    'Bachelor in Business Studies'
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