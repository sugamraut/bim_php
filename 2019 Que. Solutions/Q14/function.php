<?php

function checkCredentials($username, $password)
{
    $conn = mysqli_connect("localhost", "root", "", "ep",  3307);

    $username = validate($username);
    $password = validate($password);

    $sql = "SELECT * FROM users 
            WHERE username = '$username' AND password = '$password' 
            ";

    $query = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($query);

    if ($count == 1) {
        header('location: profile.php');
        exit;
    } else {
        header('location: login.php');
        exit;
    }
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}