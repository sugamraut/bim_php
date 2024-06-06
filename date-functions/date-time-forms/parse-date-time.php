<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['date-time']) && !empty($_POST['date-time'])) {

        $date_time_string = strtotime($_POST['date-time']);
        echo date('Y', $date_time_string);
    }
}

?>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Enter a Date: <input type="datetime-local" name="date-time"><br><br>
        <input type="Submit" value="Submit">
    </form>
</body>

</html>