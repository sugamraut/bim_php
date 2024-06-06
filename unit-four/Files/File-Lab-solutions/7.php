<?php
$headers = array(
    'Name',
    'Address',
    'Age',
    'Gender'
);

$data = array(
    array(
        'name' => 'Angel Di Maria',
        'address' => 'Paris',
        'age' => 33,
        'gender' => 'Male'
    ),
    array(
        'name' => 'Cristiano Ronaldo',
        'address' => 'Turin',
        'age' => 36,
        'gender' => 'Male'
    )
);

$fh = fopen('users-info.csv', 'w');

fputcsv($fh, $headers);

foreach ($data as $fields) {
    fputcsv($fh, $fields);
}
fclose($fh);