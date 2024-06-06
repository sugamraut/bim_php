<?php
require_once 'connect.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    //access granted
    $id = (int)$_GET['id'];

    if ($id <= 0) {
        header('location: select.php');
        exit;
    }

    //records from database tables are retrieved in order to display in the form
    $sql_1 = "SELECT * FROM students WHERE id = " . $id;
    $query_1 = mysqli_query($conn, $sql_1);

    if (mysqli_num_rows($query_1) <= 0) {
        header('location: select.php');
        exit;
    }

    //fetching a single row from a db table
    $old_data = mysqli_fetch_assoc($query_1);
} else {
    header('location: select.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php?id=<?php echo $old_data['id']; ?>" method="POST" enctype="" name="form">

        Name: <input type="text" name="uname" value="<?php echo $old_data['full_name']; ?>"> <br><br>

        Email: <input type="email" name="uemail" value="<?php echo $old_data['email']; ?>"> <br><br>

        Address: <input type="address" name="uaddress" value="<?php echo $old_data['address']; ?>"> <br><br>

        Number: <input type="number" name="unum" value="<?php echo $old_data['contact_number']; ?>"> <br><br>

        <input type="submit" value="Update">
    </form>
</body>

</html>