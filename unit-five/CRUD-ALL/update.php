<?php
require_once 'connect.php';

$sql = "UPDATE students
        SET
        full_name = '" . $_POST['uname'] . "', 
        email = '" . $_POST['uemail'] . "', 
        address = '" . $_POST['uaddress'] . "', 
        contact_number = '" . $_POST['unum'] . "'
        
        WHERE id = " . $_GET['id'];

//executing a query in database
$query = mysqli_query($conn, $sql);

if ($query) {
    //success
    header('location: select.php');
    exit;
} else {
    echo mysqli_error($conn);
}
