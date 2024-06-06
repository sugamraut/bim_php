<?php
$data = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic typesetting, 
remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
like Aldus PageMaker including versions of Lorem Ipsum.";

$file1 = fopen("aa.txt", "w"); //Open the file into write mode
$file2 = fopen("bb.txt", "w");


fwrite($file1, $data);
copy("aa.txt", "bb.txt"); //Copy the content of aa.txt into bb.txt

//Display the content of bb.txt$fp = fopen($file_name, 'r');
$fp = fopen("bb.txt", 'r');
$size = filesize("bb.txt");
// echo $size . "<br>";
$data_r = fread($fp, $size);
echo $data_r;
fclose($fp);