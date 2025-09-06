<?php

$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];


$checkValue = "Mango";

echo "Array Elements: <br>";
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}

echo "<br><br>Checking for value: $checkValue <br>";


if (in_array($checkValue, $fruits)) {
    echo "$checkValue exists in the array.";
} else {
    echo "$checkValue does not exist in the array.";
}
?>