<?php

$arr = array(
   'name' => 'ankit',
    'college' => 'thames',
    'number' => 9999999999999 
);

echo "<pre>";
print_r($arr);
echo "</pre>";

foreach ($arr as $key => $value) {
    echo $key .": " . $value . "<br>";
}
