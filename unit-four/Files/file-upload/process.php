<?php

$allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
$dir = "uploads";

if (!is_dir($dir)) {
    mkdir($dir);
}

if ($_FILES['image']['error'] == 0) {
    //no error in file
    if ($_FILES['image']['size'] <= 1000000) {
        //file size is less than 1mb

        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION); //returns file extension
        
        if (in_array($ext, $allowed_ext)) {
            //allowed format
            //Image-123123.jpg
            $file_name = "Image-" . time() . rand(0, 999) . "." . $ext;
            $path = $dir . "/" . $file_name;

            $success = move_uploaded_file($_FILES['image']['tmp_name'], $path);

            if ($success) {
                echo "File uploaded.";
            } else {
                echo "Error while uploading a file.";
            }
        } else {
            echo "File format not supported.";
        }
    } else {
        echo "File size should be less than 1MB.";
    }
} else {
    echo "Error in file.";
}