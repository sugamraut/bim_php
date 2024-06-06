<?php
$file_name = 'file.csv';

if (file_exists($file_name)) {
    echo "The csv file is there.";
} else {
    echo "No file found.";
}