<?php

session_start();

if (
    isset($_SESSION, $_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true
    && time() < $_SESSION['expiry']
) {
    echo "<h1>Welcome to profile.</h1>";
} else {
    header('location: login.php');
    exit;
}
?>

<a href="logout.php">Logout</a>