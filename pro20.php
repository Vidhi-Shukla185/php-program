<?php

$numbers = array();


for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = $i + 1;
}


echo "Indexed Array of size 10:<br>";
for ($i = 0; $i < 10; $i++) {
    echo "Index [$i] => " . $numbers[$i] . "<br>";
}
?>