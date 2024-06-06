<?php
$row = 1;
if (($handle = fopen('file.csv', 'r')) != FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) != FALSE) {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // $num = count($data);
        // echo "<p> $num fields in line $row: <br></p>";
        // $row++;

        // for ($i = 0; $i < $num; $i++) {
        //     echo $data[$i] . "<br>";
        // }

        foreach ($data as $value) {
            echo $value . "<br>";
        }
    }
    fclose($handle);
}