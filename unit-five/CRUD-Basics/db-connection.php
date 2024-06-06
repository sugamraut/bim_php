<?php

//database connection
$conn = mysqli_connect("localhost", "root", "", "sdc_b", 3306); //this function returns an mysqli Object

//to see how the object is returned debug this 
/* echo "<pre>";
print_r($conn);
echo "</pre>";
exit; */

/* if ($conn) {
    echo "Database connected successfully.";
} else {
    echo mysqli_connect_error($conn); //this function prints db errors
} */