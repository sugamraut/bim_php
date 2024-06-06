<?php

$dinner = array(
    'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
);

$meal = array(
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce'
);


echo "Before Sorting: " . "<br><br>";
foreach ($dinner as $key => $value) {
    echo "\$dinner: $value" . "<br>";
}
echo "<br>";

foreach ($meal as $key => $value) {
    echo "\$meal:  $value" . "<br>";
}

echo "<br>";

sort($dinner);
sort($meal);

echo "After Sorting:" . "<br><br>";
foreach ($dinner as $key => $value) {
    echo "\$dinner: $value" . "<br>";
}

echo "<br>";

foreach ($meal as $key => $value) {
    echo "\$meal:  $value" . "<br>";
}