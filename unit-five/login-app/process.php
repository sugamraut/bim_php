<?php

$conn = mysqli_connect('localhost', 'root', '', 'demo', 3306);

if (
    isset($_POST, $_POST['uName'], $_POST['uPass'])
    && !empty($_POST['uName']) && !empty($_POST['uPass'])
) {
    $userName = $_POST['uName'];
    $userPass = $_POST['uPass'];

    $sql = "SELECT * FROM users 
            WHERE username = '$userName' AND password = '$userPass' 
            ";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) <= 0) {
        header('location: login-form.php');
        exit;
    } else {
        $row = mysqli_fetch_assoc($query);
        if (
            $row['username'] == $userName &&
            $row['password'] == $userPass
        ) {
            header('location: profile.php');
            exit;
        } else {
            header('location: login-form.php');
            exit;
        }
    }
} else {
    header('location: login-form.php');
    exit;
}
