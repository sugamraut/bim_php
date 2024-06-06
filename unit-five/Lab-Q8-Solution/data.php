<?php
$headers = array(
    'itemID',
    'itemDesc',
    'rate',
    'qty',
);

$data = array(
    array(
        'itemID' => 1,
        'itemDesc' => 'iPhone',
        'rate' => 10000,
        'qty' => 1

    ),
    array(
        'itemID' => 2,
        'itemDesc' => 'Laptop',
        'rate' => 200000,
        'qty' => 2

    ),
    array(
        'itemID' => 3,
        'itemDesc' => 'Ipad',
        'rate' => 80000,
        'qty' => 2

    ),
    array(
        'itemID' => 4,
        'itemDesc' => 'TV',
        'rate' => 50000,
        'qty' => 2

    )
);

$fh = fopen('file.csv', 'w');

fputcsv($fh, $headers);

foreach ($data as $fields) {
    fputcsv($fh, $fields);
}

fclose($fh);