<?php
/* This code is solution for the code default-checkbox.php */

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_POST["hobbies"])) {
        //error
        $error = "You must select atleast 1 option";
    } else {
        //success
        foreach ($_POST['hobbies'] as $values) {
            if ($values == "foo") {
                echo "Football" . "<br>";
            } else if ($values == "gui") {
                echo "Playing Guitar" . "<br>";
            } else {
                echo "Cricket";
            }
        }
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
        if ($error) {
            echo $error;
        }
        ?>
    </span>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="checkbox" name="hobbies[]" value="foo"
            <?php if (isset($_POST["hobbies"]) && in_array("foo", $_POST["hobbies"])) echo "checked = 'checked'"; ?>>
        Football
        <input type="checkbox" name="hobbies[]" value="gui"
            <?php if (isset($_POST["hobbies"]) && in_array("gui", $_POST["hobbies"])) echo "checked = 'checked'"; ?>>
        Playing Guitar
        <input type="checkbox" name="hobbies[]" value="cric"
            <?php if (isset($_POST["hobbies"]) && in_array("cric", $_POST["hobbies"])) echo "checked = 'checked'"; ?>>
        Cricket <br><br>

        <input type="submit" name="submit_form" value="Say Hello">
    </form>
</body>

</html>