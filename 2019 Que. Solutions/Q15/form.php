<?php
$name = $age = $hobby = $comment = $sucess = $error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (
        isset($_POST['name'], $_POST['age']) && !empty($_POST['name'])
        && !empty($_POST['age'])
    ) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if (!preg_match("/^[a-zA-Z ]{2,10}+$/", $name)) {
            $error = "Your name field should only be characters!";
        }

        if (!($age >= 16 && $age <= 25)) {
            $error = "Your age should be between 16 and 25.";
        }

        if (!isset($_POST['hobbies']) && empty($_POST['hobbies'])) {
            $error = "You must select atleast one hobby.";
        }

        if (!isset($_POST['comment']) || empty($_POST['comment'])) {
            $error = "Please enter your comment.";
        }

        $sucess =  "** Welcome ** " . $name;
    } else {
        $error =  "** Please fill up the form! **";
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form">
        Username: <input type="text" name="name"> <br><br>

        Age: <input type="number" name="age"> <br><br>

        <input type="checkbox" name="hobbies[]"> Football
        <input type="checkbox" name="hobbies[]"> Playing Guitar
        <input type="checkbox" name="hobbies[]"> Cricket <br><br>

        <p>Any Comments?</p>
        <textarea name="comment" rows="4" cols="30" style="resize: none"></textarea><br><br>

        <Button type="submit" value="btn"> <i>Submit</i> </Button> <br><br>

        <span style="color: red;">
            <?php
            if ($error) {
                echo $error;
            }
            ?>
        </span>
        <span style="color: blue;">
            <?php
            if ($sucess && empty($error)) {
                echo $sucess;
            }
            ?>
        </span>
    </form>
</body>

</html>