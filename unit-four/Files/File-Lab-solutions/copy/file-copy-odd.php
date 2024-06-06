<?php
$data = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";

$file1 = fopen("aa.txt", "w"); //Open the file into write mode
fwrite($file1, $data);
fclose($file1);

$file2 = fopen("bb.txt", "w");

$fp = fopen("aa.txt", "r");
$count = 1;
//reading a file line by line
while (!feof($fp)) {
    $oddLine = fgets($fp);
    // echo $oddLine;
    if ($count % 2 == 1) {
        fwrite($file2, $oddLine);
        // copy("aa.txt", "bb.txt"); //Copy the content of aa.txt into bb.txt
    }
    $count++;
}

fclose($fp);
fclose($file2);
exit;







/* //Display the content of bb.txt$fp = fopen($file_name, 'r');
$fp = fopen("bb.txt", 'r');
$size = filesize("bb.txt");
// echo $size . "<br>";
$data_r = fread($fp, $size);
echo $data_r;
fclose($fp); */