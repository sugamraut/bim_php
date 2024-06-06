<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (
        isset($_POST['date1'], $_POST['date2'])
        && !empty($_POST['date1']) && !empty($_POST['date2'])
    ) {

        $date_time_string1 = strtotime($_POST['date1']);
        $date_time_string2 = strtotime($_POST['date2']);

        $difference = abs($date_time_string2 - $date_time_string1);

        $years = floor($difference / (365 * 60 * 60 * 24)); //years
        $months = floor($difference / (60 * 60 * 24 * 30)); //months
        $days = floor($difference / (60 * 60 * 24)); //days

        echo "The difference between two dates is: $days days.";
    }
}

?>
<html>

<head>
    <title>Date Difference Calculator</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="date1">Enter the first date (mm-dd-YYYY):</label>
        <input type="date" name="date1" id="date1">
        <br><br>
        <label for="date2">Enter the second date (mm-dd-YYYY):</label>
        <input type="date" name="date2" id="date2">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>