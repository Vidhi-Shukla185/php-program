<?php

$numbers = array(45, 12, 78, 34, 90, 23, 56);


echo "<b>Array Elements:</b><br>";
foreach ($numbers as $index => $value) {
    echo "Index [$index] => $value <br>";
}


$largest = max($numbers);
$smallest = min($numbers);

echo "<br><b>Largest Number: $largest</b><br>";
echo "<b>Smallest Number: $smallest</b>";
?>