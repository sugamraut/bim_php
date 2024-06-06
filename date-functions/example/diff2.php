<html>

<head>
    <title>Date Difference Calculator</title>
</head>

<body>
    <form action="date_difference.php" method="post">
        <label for="date1">Enter the first date (yyyy-mm-dd):</label>
        <input type="text" id="date1" name="date1">
        <br><br>
        <label for="date2">Enter the second date (yyyy-mm-dd):</label>
        <input type="text" id="date2" name="date2">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];

    $difference = dateDifference($date1, $date2);
    printf("The difference is: %d years, %d months, and %d days.", $difference['years'], $difference['months'], $difference['days']);
}

function dateDifference($date1, $date2)
{
    $date1 = strtotime($date1);
    $date2 = strtotime($date2);

    $diff = abs($date2 - $date1);

    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    return array(
        'years' => $years,
        'months' => $months,
        'days' => $days
    );
}
?>