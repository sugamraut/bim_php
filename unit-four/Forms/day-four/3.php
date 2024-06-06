<?php
/* Using a hidden parameter to indicate form submission */

if (array_key_exists('submit_check', $_POST)) {
    process_form();
}

function process_form()
{
    echo "Hello " . $_POST['uName'];
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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Your Name: <input type="text" name="uName"><br><br>
        <input type="submit" name="submit_form" value="Say Hello">
        <input type="hidden" name="submit_check">
    </form>
</body>

</html>