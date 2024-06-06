<?php
require 'function.php';

if (isset($_POST, $_POST['uname'], $_POST['upass']) && !empty($_POST['uname']) && !empty($_POST['upass'])) {
    $user_name = $_POST['uname'];
    $user_pass = $_POST['upass'];

    checkCredentials($user_name, $user_pass);
} else {
    header('location: login.php');
    exit;
}