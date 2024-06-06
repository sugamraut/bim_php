<?php
$howManyErr = "";
$howMany = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_POST["howMany"])) {
        $howManyErr = "You must select 1 option";
    } else {
        $howMany = $_POST["howMany"];
    }
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
    <span style="color: red;">
        <?php
        if ($howManyErr) {
            echo $howManyErr;
        }
        ?>
    </span>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="radio" name="howMany" value="zero"
            <?php if (isset($howMany) && $howMany == "zero") echo "checked"; ?>> 0
        <input type="radio" name="howMany" value="one"
            <?php if (isset($howMany) && $howMany == "one") echo "checked"; ?>> 1
        <input type="radio" name="howMany" value="two"
            <?php if (isset($howMany) && $howMany == "two") echo "checked"; ?>> 2
        <input type="radio" name="howMany" value="twoplus"
            <?php if (isset($howMany) && $howMany == "twoplus") echo "checked"; ?>> More than 2
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>