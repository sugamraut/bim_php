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
    <form action="simple.php" method="POST" enctype="" name="form">

        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname" required> <br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname"> <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"> <br><br>

        <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="others"> Others <br><br>

        <input type="checkbox" name="hobbies[]" checked value="football"> Football
        <input type="checkbox" name="hobbies[]" value="guitar"> Playing Guitar
        <input type="checkbox" name="hobbies[]" value="cricket"> Cricket <br><br>

        Cities you've lived in: <select name="city[]" multiple>
            <option value="ktm"> Kathmandu </option>
            <option value="pkr"> Pokhara </option>
            <option value="brt"> Biratnagar </option>
            <option value="cht"> Chitwan </option>
            <option value="dhg"> Dhangadi </option>
        </select><br><br>

        Upload your file: <input type="file" name="myFile"><br><br>

        <label for="">Enter Your Queries here ? </label><br><br>
        <textarea name="txtarea" rows="4" cols="30"></textarea><br><br>

        <input type="button" value="BUTTON">
        <input type="reset" value="RESET">
        <input type="submit" value="Submit">
        <Button type="button" value="btn"> <i>Hello</i> </Button>
    </form>
</body>

</html>