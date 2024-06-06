<?php

/* Name field validation */
$name = $sucess = $error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];

    if (isset($name) && !empty($name)) {
        //success
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            //error
            $error = "Your name field should only be letters!";
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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="name"> <br><br>
        <input type="submit" value="Submit">
    </form>
    <br>
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
</body>

</html>