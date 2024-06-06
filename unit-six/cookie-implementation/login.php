<?php
session_start();
if (isset($_SESSION, $_SESSION['is_logged_in']) && !empty($_SESSION['is_logged_in'])) {
    $_SESSION['success'] = "You are already logged in.";
    header('location: profile.php');
    exit;
}

if (isset($_COOKIE, $_COOKIE['is_logged']) && $_COOKIE['is_logged'] == true) {
    $_SESSION['is_logged_in'] = true;
    $_SESSION['success'] = "Welcome back to profile.";
    header('location: profile.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION, $_SESSION['error']) && !empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <form action="login-process.php" method="POST">
        Username: <input type="email" name="username" placeholder="Enter your email.............."><br><br>
        Password: <input type="password" name="password" placeholder="Enter your password........"><br><br>
        <input type="checkbox" name="remember_me" value="1">Remember Me<br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>