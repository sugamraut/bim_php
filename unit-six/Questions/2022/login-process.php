<?php
session_start();

$user = "admin@admin.com";
$pass = "admin";

if (
    isset($_POST, $_POST['uName'], $_POST['uPass']) && !empty($_POST['uName']) &&
    !empty($_POST['uPass'])
) {
    $username = filter_var($_POST['uName'], FILTER_VALIDATE_EMAIL);

    if (!$username) {
        $_SESSION['error'] = "Username should be of email type.";
        header('location: login.php');
        exit;
    }

    if ($username == $user && $_POST['uPass'] == $pass) {
        //success
        $_SESSION['is_logged_in'] = true;
        $_SESSION['expiry'] = time() + (60 * 60 * 5);
        header('location: profile.php');
        exit;
    } else {
        $_SESSION['error'] = "Credentials did not match.";
        header('location: login.php');
        exit;
    }
} else {
    $_SESSION['error'] = "Please fill up the form.";
    header('location: login.php');
    exit;
}