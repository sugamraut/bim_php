<?php
session_start();
if (isset($_SESSION, $_SESSION['is_logged_in']) && !empty($_SESSION['is_logged_in'])) {
    echo $_SESSION['success'];
} else {
    $_SESSION['error'] = "You are not logged in.";
    header('location: login.php');
    exit;
}
?>
<br>
<a href="logout.php">Logout</a>