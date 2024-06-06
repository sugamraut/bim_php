<?php
/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

//db connection
$conn = mysqli_connect("localhost", "root", "", "sdc_b", 3306);

//inserting multiple row at a time
$sql = "INSERT INTO students
            (full_name, email, address, contact_number)
            VALUES
            ('Lionel Messi', 'lm@gmail.com', 'Rosario', 99999999),
            ('Neymar', 'ny@gmail.com', 'Sao Paolo', 999998888)
        ";

//executing a SQL query
$query = mysqli_query($conn, $sql); //this function returns true or false

if ($query) {
    //success
    echo "Data Inserted Successfully.";
} else {
    echo mysqli_error($conn); //this function prints db errors
}
