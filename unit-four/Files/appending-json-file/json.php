<?php
$file_name = "data.json";
$person = $_POST;

if (isset($_POST) && !empty($_POST)) {
    if (file_exists($file_name)) {
        //file has been created
        $old_data = file_get_contents($file_name);
        if ($old_data) {
            //not empty, already data exists
            $to_write = json_decode($old_data);
            $to_write[] = $_POST;
        } else {
            //empty data
            $to_write = array(
                $_POST
            );
        }
    } else {
        $to_write = array(
            $_POST
        );
    }
} else {
    header('location: form.php');
    exit;
}

$json_str = json_encode($to_write);

$success = file_put_contents($file_name, $json_str);

if ($success) {
    echo "File written successfully.";
} else {
    echo "Sorry! problem while wrirting a file.";
}

echo "<br><br>";

/* $data = file_get_contents($file_name);
echo $data;

$array = json_decode($data, true);

echo "<pre>";
print_r($array);
echo "</pre>"; */