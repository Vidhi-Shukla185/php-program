<?php
$numbers = array(10, 20, 30, 40, 50);


echo "<b>Array Elements:</b><br>";
foreach ($numbers as $index => $value) {
    echo "Index [$index] => $value <br>";
}


$sum = 0;
foreach ($numbers as $value) {
    $sum += $value;
}


echo "<br><b>Sum of all numbers = $sum</b>";
?>