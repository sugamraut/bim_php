<?php
/* Example to cover on Topic accessing form parameters (are discussed below):
    -> A two element form
    -> Printing submitted form parameters
    -> Multiple-valued form elements and accessing it    
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="process.php">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname" required> <br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname"> <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"> <br><br>

        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female <br><br>

        <input type="checkbox" name="hobbies[]" value="football"> Football
        <input type="checkbox" name="hobbies[]" value="guitar"> Playing Guitar
        <input type="checkbox" name="hobbies[]" value="cricket"> Cricket <br><br>

        City you live in: <select name="city[]" multiple>
            <option value="ktm" selected> Kathmandu </option>
            <option value="pkr"> Pokhara </option>
            <option value="brt"> Biratnagar </option>
            <option value="cht"> Chitwan </option>
            <option value="dhg"> Dhangadi </option>
        </select><br><br>


        <label for="">Enter Your Queries here ? </label><br><br>
        <textarea name="txtarea" rows="4" cols="30" style="resize: none"></textarea><br><br>


        <input type="submit" value="Submit">



    </form>
</body>

</html>