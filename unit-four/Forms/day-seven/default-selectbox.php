<?php
$favFruitErr = "";
$favFruit = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    /* echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    exit; */
    if (empty($_POST["favFruit"]) && !isset($_POST['favFruit'])) {
        $favFruitErr = "You must select 1 or more";
    } else {
        $favFruit = $_POST["favFruit"];
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
        if ($favFruitErr) {
            echo $favFruitErr;
        }
        ?>
    </span>
    <span style="color: green;">
        <?php
        if ($favFruit) {
            echo implode(", ", $favFruit);
            echo "<br>";
        }
        ?>
    </span>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select name="favFruit[]" size="4" multiple>
            <?php
            $options = array("apple", "banana", "plum", "pomegranate", "strawberry", "watermelon", "pineapple");
            foreach ($options as $option) {
                echo '<option value="' . $option . '"';
                if (in_array($option, $favFruit)) {
                    echo "selected";
                }
                echo ">" . ucfirst($option) . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>