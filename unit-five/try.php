<?php
/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

//db connection
$conn = mysqli_connect("localhost", "root", "", "demo", 3306);

//inserting single row at a time
$sql = "INSERT INTO try 
            SET 
            name = 'Angel Fabian',
            email = 'angelfabiasasdaasnaksnsas@gmail.com',
            number = 9863236929
        ";

//executing a SQL query
$query = mysqli_query($conn, $sql); //this function returns true or false

if ($query) {
    //success
    echo "Data Inserted Successfully.";
} else {
    echo mysqli_error($conn); //this function prints db errors
}