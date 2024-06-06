<?php
$data = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic typesetting, 
remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
like Aldus PageMaker including versions of Lorem Ipsum.";

$file_name = "dummy.txt";

//writing a file
/* $success = file_put_contents($file_name, $data);

if ($success) {
    echo "File written successfully.";
} else {
    echo "Sorry! problem while wrirting a file.";
}
 */
echo "<br><br>";

//Reading a file
/* $data = file_get_contents($file_name);
echo $data; */

//File write operation
// $fp = fopen($file_name, 'w');
// fwrite($fp, $data);
// fclose($fp);

//File read operation
/* $fp = fopen($file_name, 'r');
$size = filesize($file_name);
// echo $size . "<br>";
$data_r = fread($fp, $size);
echo $data_r;
fclose($fp); */