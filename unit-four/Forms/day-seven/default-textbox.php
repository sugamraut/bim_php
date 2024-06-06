<?php
/* 
    Displaying Default Values:
    Sometimes, you want to display a form with a value already in a 
    text box or with selected checkboxes, radio buttons or select 
    menu items.

    Aditionally, when you redisplay a form because of an error, it 
    is helpful to preserve any information that a user has already 
    entered.

*/

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlentities($_POST['name']);
    // echo $name;
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Your Name: <input type="text" name="name" value="<?php echo (isset($name)) ? $name : 'SDC'; ?>"><br><br>
        <input type="submit" name="submit_form" value="Say Hello">
    </form>
</body>

</html>