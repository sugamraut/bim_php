<?php
session_start();
session_destroy();

if (isset($_COOKIE['is_logged'])) {
    //deleting a cookie
    setcookie('is_logged', '', time() - 60);
}

header('location: login.php');
exit;