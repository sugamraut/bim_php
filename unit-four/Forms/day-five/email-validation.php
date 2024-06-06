<?php
$email = $sucess = $error = "";
$emailError = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];

    if (isset($email) && !empty($email)) {
        //success
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "** Your email is Invalid **";
        }
        $sucess =  "** Congratulations ** ";
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
        Email: <input type="email" name="email"> <br><br>

        <input type="submit" value="Submit">
    </form>
    <br>
    <span style="color: red;">
        <?php
        if ($emailError) {
            echo $emailError;
        }
        ?>
    </span>
    <span style="color: red;">
        <?php
        if ($error) {
            echo $error;
        }
        ?>
    </span>
    <span style="color: blue;">
        <?php
        if ($sucess && empty($error) && empty($emailError)) {
            echo $sucess;
        }
        ?>
    </span>
</body>

</html>