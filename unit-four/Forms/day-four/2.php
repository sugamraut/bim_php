<?php

/* Topic: Form Processing with Functions */

if (array_key_exists('my_name', $_POST)) {
    process();
}

function process()
{
    echo "Hello " . $_POST['my_name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Your name: <input type="text" name="my_name">
        <br>
        <input type="submit" value="Say Hello">
    </form>
</body>

</html>