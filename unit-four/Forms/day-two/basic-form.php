<?php /* File name: basic-form.php */ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="hello.php">
        <label for="my_name">Username: </label>
        <input type="text" id="my_name" name="my_name"> <br><br>

        <input type="submit" value="Say Hello">
    </form>
    <br>
</body>

</html>