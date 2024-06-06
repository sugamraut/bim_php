<?php
$success = $error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['gender']) && !empty($_POST['gender'])) {
    $success = "** {$_POST['gender']} selected succesfully **";
  } else {
    $error = "** Please select your gender **";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span style="color: red;">
        <?php
    if ($error) {
      echo $error;
    }
    ?>
    </span>
    <span style="color: green;">
        <?php
    if ($success && empty($error)) {
      echo $success;
    }
    ?>
    </span>
    <form method="POST" action="<?php echo  $_SERVER['PHP_SELF']; ?>">

        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Others"> Others <br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>