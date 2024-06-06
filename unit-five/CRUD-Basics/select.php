<?php require_once 'db-connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID.</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact Number</th>
        </tr>
        <?php
        $sql = "SELECT * FROM students";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) <= 0) {
            echo "No data found in table.";
        } else {
            //fetch all data from a table at one go
            // $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

            //fetch a data from a table one row at a time
            // $row = mysqli_fetch_assoc($query);
            $i = 1;
            while ($row = mysqli_fetch_assoc($query)) {
        ?>
                <tr>
                    <td><?php echo $i++ . "."; ?></td>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['contact_number']; ?></td>
                </tr>
        <?php
            }
        }

        ?>
    </table>
</body>

</html>