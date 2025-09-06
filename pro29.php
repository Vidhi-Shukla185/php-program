<?php
// Create an indexed array with duplicate values
$numbers = [10, 20, 30, 20, 40, 10, 50, 30];

echo "Original Array: <br>";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Remove duplicates using array_unique()
$uniqueNumbers = array_unique($numbers);

echo "<br><br>Array after removing duplicates (using array_unique): <br>";
foreach ($uniqueNumbers as $num) {
    echo $num . " ";
}
?>