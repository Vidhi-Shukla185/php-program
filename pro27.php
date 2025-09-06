<?php
// Store numbers in an array
$numbers = [45, 12, 89, 33, 7, 56];

echo "Original Array: <br>";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Sort in Ascending Order
sort($numbers);
echo "<br><br>Array in Ascending Order (using sort): <br>";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Sort in Descending Order
$numbers = [45, 12, 89, 33, 7, 56]; // re-declare original array
rsort($numbers);
echo "<br><br>Array in Descending Order (using rsort): <br>";
foreach ($numbers as $num) {
    echo $num . " ";
}
?>