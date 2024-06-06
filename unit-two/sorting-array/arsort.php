<?php

$meal = array(
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
);

echo "Before Sorting: " . "<br>";

foreach ($meal as $key => $value) {
    echo " \$meal: $value" . "<br>";
}

echo "<br>";

arsort($meal);

echo "After Sorting: " . "<br>";
foreach ($meal as $key => $value) {
    echo "\$meal: $value" . "<br>";
}