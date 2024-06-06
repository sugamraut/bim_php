<?php
session_start();

/* Boards 2022:
   Q. Create a login form with appropriate credentials and the session 
   should be expired after 5 hours, from the first time he/she has
   logged in. 
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION, $_SESSION['error']) && !empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']); //session message has been deleted
    }
    ?>
    <form method="POST" action="login-process.php">
        Username: <input type="email" name="uName"><br><br>
        Password: <input type="password" name="uPass"><br><br>
        <input type="submit" value="Log In">
    </form>
</body>

</html>