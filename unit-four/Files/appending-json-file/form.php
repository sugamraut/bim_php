<?php

/* Form Basics */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="json.php" method="POST" enctype="multipart/form-data" name="form">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="uname" required> <br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname"> <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"> <br><br>

        <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="others"> Others <br><br>

        <input type="checkbox" name="hobbies[]" checked value="football"> Football
        <input type="checkbox" name="hobbies[]"> Playing Guitar
        <input type="checkbox" name="hobbies[]"> Cricket <br><br>

        City you live in: <select name="city">
            <option value="ktm" selected> Kathmandu </option>
            <option value="pkr"> Pokhara </option>
            <option value="brt"> Biratnagar </option>
            <option value="cht"> Chitwan </option>
            <option value="dhg"> Dhangadi </option>
        </select><br><br>

        Upload your file: <input type="file" name="myFile"><br><br>

        <label for="">Enter Your Queries here ? </label><br><br>
        <textarea name="txtarea" rows="4" cols="30" style="resize: none"></textarea><br><br>

        <input type="submit" value="Submit">

    </form>
</body>

</html>