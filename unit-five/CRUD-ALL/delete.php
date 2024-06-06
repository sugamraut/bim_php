<?php
require_once 'connect.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    //access granted
    $id = (int)$_GET['id']; //data type casting

    if ($id <= 0) {
        //cross checking if invalid id passed from url query e.g. id=asdjdas
        header('location: select.php');
        exit;
    }

    //cross checking from if the error id value is passed from url query string e.g. id=13211513351
    $sql_1 = "SELECT * FROM students WHERE id = " . $id;
    $query_1 = mysqli_query($conn, $sql_1);

    //validates if there is data in a table or not.
    if (mysqli_num_rows($query_1) <= 0) {
        header('location: select.php');
        exit;
    }

    $sql = "DELETE FROM students WHERE id = " . $id;
    $query = mysqli_query($conn, $sql);

    if ($query) {
        //success
        header('location: select.php');
        exit;
    } else {
        header('location: select.php');
        exit;
    }
} else {
    header('location: select.php');
    exit;
}
