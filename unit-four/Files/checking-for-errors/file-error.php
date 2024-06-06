<?php
/* Example: Checking for an error from file_get_contents() */
$file_name = 'page.txt';
$data = "hello";

$page = file_get_contents($file_name);

// Note the three equals signs in the test expression
if ($page === false) {
    echo "Couldn't load template.";
    $fp = fopen($file_name, 'w');
    fwrite($fp, $data);
    fclose($fp);
} else {
    // ... process required operation here
    $fp = fopen($file_name, 'r');
    $size = filesize($file_name);
    $data = fread($fp, $size);
    echo $data;
    fclose($fp);
}