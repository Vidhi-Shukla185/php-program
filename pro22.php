<?php

$numbers = array();


for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = $i + 1;  
}


echo "Indexed Array Elements:<br>";
foreach ($numbers as $index => $value) {
    echo "Index [$index] => $value <br>";
}
?>