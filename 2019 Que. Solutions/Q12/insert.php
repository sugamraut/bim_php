<?php
require 'db-connection.php';
require 'data.php';

$count = 0;
if (($handle = fopen('file.csv', 'r')) != FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) != FALSE) {
        if ($count != 0) {

            $sql = "INSERT INTO products
                    SET
                    itemID = '" . $data[0] . "',
                    itemDesc = '" . $data[1] . "',
                    rate = '" . $data[2] . "',
                    qty = '" . $data[3] . "'
                    ";

            $query = mysqli_query($conn, $sql);
        }
        $count++;
    }
    fclose($handle);
    echo "CSV file inserted successfully.";
}